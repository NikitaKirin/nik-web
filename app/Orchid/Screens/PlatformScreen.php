<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PlatformScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return __("Nik-web Admin");
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        $name = Auth::user()->name;
        return __("Добро пожаловать, $name");
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Website')
                ->href('https://nik-web.ru')
                ->target('_blank')
                ->icon('globe-alt'),

            Link::make('Yandex Metrika')
                ->href('https://metrika.yandex.ru/dashboard?id=92021760')
                ->target('_blank')
                ->icon('docs'),

            /*Link::make('GitHub')
                ->href('https://github.com/orchidsoftware/platform')
                ->icon('social-github'),*/
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
//            Layout::browsing('https://nik-web.ru')
//            ->height('1000px'),
        ];
    }
}
