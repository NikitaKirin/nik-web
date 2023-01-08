<?php

namespace App\Orchid\Screens\WorkExperience;

use App\Models\WorkExperience;
use App\Orchid\Layouts\WorkExperience\WorkExperienceListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class WorkExperienceListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'workExperiences' => WorkExperience::all(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return __('Опыт работы');
    }

    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add'))
                ->icon('plus')
                ->route('platform.workExperiences.create'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            WorkExperienceListLayout::class,
        ];
    }

    public function destroy(Request $request)
    {
        WorkExperience::findOrFail($request->input('id'))->delete();

        Toast::success(__('Запись успешно удалена'));
    }
}
