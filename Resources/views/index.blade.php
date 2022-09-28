@extends('showcase::layouts.master')
@section('title', 'Accueil')

@section('content')
    <x-showcase::contact-modal />
    @include('showcase::components.home.hero')

    @include('showcase::components.home.about-section')


    @include('showcase::components.home.services-section')


    @include('showcase::components.home.projects-section')

    @include('showcase::components.home.team-section')

@endsection
