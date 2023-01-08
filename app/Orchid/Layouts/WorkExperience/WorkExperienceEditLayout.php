<?php

namespace App\Orchid\Layouts\WorkExperience;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Switcher;
use Orchid\Screen\Layouts\Rows;

class WorkExperienceEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('start_date')
                ->type('month')
                ->title(__('Дата начала'))
                ->value($this->query->get('workExperience.start_date'))
                ->horizontal()
                ->required(),

            Input::make('end_date')
                ->type('month')
                ->title(__('Дата окончания'))
                ->value($this->query->get('workExperience.end_date'))
                ->horizontal(),

            Input::make('company_name')
                ->title(__('Название компании'))
                ->value($this->query->get('workExperience.company_name'))
                ->required(),

            Input::make('position')
                ->title(__('Должность'))
                ->value($this->query->get('workExperience.position'))
                ->required(),

            Input::make('description')
                ->title(__('Описание'))
                ->value($this->query->get('workExperience.description'))
                ->required(),

            Switcher::make('hidden')
                ->title(__('Скрыть'))
                ->sendTrueOrFalse()
                ->value($this->query->get('workExperience.hidden')),

        ];
    }
}
