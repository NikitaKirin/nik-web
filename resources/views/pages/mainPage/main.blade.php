@extends('layouts.app')

@section('title', __('Main page'))

@section('main')
    <main>
        @include('pages.mainPage.blocks.aboutMe')
        @include('pages.mainPage.blocks.skills')
    </main>
@endsection