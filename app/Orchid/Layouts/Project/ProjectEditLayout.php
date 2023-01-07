<?php

namespace App\Orchid\Layouts\Project;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Layouts\Rows;

class ProjectEditLayout extends Rows
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
            Input::make('title')
                ->title(__('Название'))
                ->type('text')
                ->required()
                ->value($this->query->get('project.title')),

            Input::make('annotation')
                ->title(__('Аннотация'))
                ->type('text')
                ->required()
                ->value($this->query->get('project.annotation')),

            Quill::make('description')
                ->title(__('Описание'))
                ->toolbar(["text", "color", "header", "list", "format", "media"])
                ->required()
                ->value($this->query->get('project.description')),


            Input::make('technologies')
                ->title(__('Технологии'))
                ->type('text')
                ->required()
                ->value($this->query->get('project.technologies')),


            Input::make('demo_link')
                ->title(__('Ссылка на демо-вариант'))
                ->type('url')
                ->value($this->query->get('project.demo_link')),


            Input::make('code_link')
                ->title(__('Ссылка на репозиторий'))
                ->type('url')
                ->value($this->query->get('project.code_link')),


            Picture::make('fon_id')
                ->title(__('Обложка'))
                ->required()
                ->targetId()
                ->value($this->query->get('project')->fon_id),
        ];
    }
}
