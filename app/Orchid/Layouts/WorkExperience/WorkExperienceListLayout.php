<?php

namespace App\Orchid\Layouts\WorkExperience;

use App\Models\WorkExperience;
use Illuminate\Support\Facades\Route;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Color;

class WorkExperienceListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'workExperiences';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('#')
                ->render(function (WorkExperience $workExperience, object $loop) {
                    return ++$loop->index;
                }),

            TD::make('start_date', __('Дата начала')),
            TD::make('end_date', __('Дата окончания')),

            TD::make('company_name', __('Название компании')),
            TD::make('position', __('Должность')),

            TD::make(__('Действия'))
                ->cantHide()
                ->render(function (WorkExperience $workExperience) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make(__('Edit'))
                                ->icon('pencil')
                                ->route('platform.workExperiences.edit', $workExperience),
                            Button::make(__('Delete'))
                                ->type(Color::DANGER())
                                ->icon('trash')
                                ->method('destroy', ['id' => $workExperience->id])
                                ->canSee(Route::is('platform.workExperiences*')),
                        ]);
                }),
        ];
    }
}
