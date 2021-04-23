@extends('layouts.index')

@section('content')
    @include('pages.mobilenav')
    @include('partials.header') 
    @include('pages.hero')
    @include('pages.about')
    @include('pages.facts')
    @include('pages.skills')
    @include('pages.projets')
    @include('pages.services')
    @include('pages.contact')
    @include('partials.footer')
@endsection