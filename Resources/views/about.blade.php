@extends('showcase::layouts.master')
@section('title', 'A-propos')

@section('content')
    <x-showcase::header-section title="A-propos de figuil.com" subTitle="Helping people and teams solve complex problems" />

    @include('showcase::components.home.team-section')

@endsection
