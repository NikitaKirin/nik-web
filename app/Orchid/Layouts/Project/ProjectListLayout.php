<?php

namespace App\Orchid\Layouts\Project;

use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Color;

class ProjectListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'projects';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('#')
                ->render(function (Project $project, object $loop) {
                    return ++$loop->index;
                }),

            TD::make('title', __('Название')),

            TD::make('annotation', __('Аннотация')),

            TD::make(__('Действия'))
                ->cantHide()
                ->render(function (Project $project) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([
                            Link::make(__('Edit'))
                                ->icon('pencil')
                                ->route('platform.projects.edit', $project),
                            Button::make(__('Delete'))
                                ->type(Color::DANGER())
                                ->icon('trash')
                                ->method('destroy', ['id' => $project->id])
                                ->canSee(Route::is('platform.projects*')),
                        ]);
                }),
        ];
    }
}
