<?php

namespace App\Orchid\Screens\WorkExperience;

use App\Http\Requests\WorkExperience\WorkExperienceCreateOrEditRequest;
use App\Models\WorkExperience;
use App\Orchid\Layouts\WorkExperience\WorkExperienceEditLayout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class WorkExperienceEditScreen extends Screen
{

    public WorkExperience $workExperience;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(WorkExperience $workExperience): iterable
    {
        return [
            'workExperience' => $workExperience,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->workExperience->exists ? __("Изменить") : __("Добавить опыт работы");
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
            Layout::block(WorkExperienceEditLayout::class)
                ->title(__('Основная информация'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::SUCCESS())
                        ->method('save'),
                ),
        ];
    }

    public function save(WorkExperience $workExperience, WorkExperienceCreateOrEditRequest $request)
    {
        $workExperience->fill($request->validated())->save();

        Toast::success(__('Запись успешно сохранена'));
    }
}
