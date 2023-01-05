@extends('layouts.app')

@section('title', __('Main page'))

@section('main')
    <main class="px-[15px] container max-w-7xl mx-auto">
        @include('pages.mainPage.blocks.aboutMe')
        @include('pages.mainPage.blocks.skills')
        @include('pages.mainPage.blocks.workExperience')
        @include('pages.mainPage.blocks.projects')
        @include('pages.mainPage.blocks.contacts')
    </main>
@endsection