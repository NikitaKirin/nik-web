<?php

namespace App\Orchid\Screens\Project;

use App\Http\Requests\Project\ProjectCreateOrEditRequest;
use App\Models\Project;
use App\Orchid\Layouts\Project\ProjectEditLayout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ProjectEditScreen extends Screen
{
    public Project $project;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Project $project): iterable
    {
        return [
            'project' => $project,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->project->exists ?
            __("Изменить проект: {$this->project->title}") :
            __('Создать новый проект');
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::block(ProjectEditLayout::class)
                ->title(__('Основная информация'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::SUCCESS())
                        ->method('save'),
                ),
        ];
    }

    public function save(Project $project, ProjectCreateOrEditRequest $request)
    {
        $project->fill($request->validated())->save();

        if ($request->input('fon_id')) {
            $project->attachment()->syncWithoutDetaching(
                $request->input('fon_id', []),
            );
            $project->fon_id = $project->attachment()->first()?->id;
            $project->save();
        } else {
            $project->fon->delete();
        }
        Toast::success(__('Проект успешно сохранен'));
    }
}
