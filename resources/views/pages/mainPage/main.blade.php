@extends('layouts.app')

@section('title', __('Кирин Никита – Junior PHP-Developer'))

@section('main')
    <main class="px-[15px] container max-w-7xl mx-auto sm:px-[25px] min-[1310px]:px-0">
        @include('pages.mainPage.blocks.aboutMe')
        @include('pages.mainPage.blocks.skills')
        @include('pages.mainPage.blocks.workExperience')
        @include('pages.mainPage.blocks.projects')
        @include('pages.mainPage.blocks.contacts')
    </main>
@endsection