@extends('layouts.app')

@section('title', __('Main page'))

@section('main')
    <main>
        @include('pages.mainPage.blocks.aboutMe')
        @include('pages.mainPage.blocks.skills')
        @include('pages.mainPage.blocks.workExperience')
        @include('pages.mainPage.blocks.projects')
        @include('pages.mainPage.blocks.contacts')
    </main>
@endsection