@extends('layouts.public.app')

@section('content')

    @include('pages.includes.header')

    @include('pages.home.sections.video_header')

    @include('pages.home.sections.header_headline')

    @include('pages.home.sections.stepbystep')

    @include('pages.home.sections.featured_work')

    @include('pages.home.sections.inside_sfs')

    @include('pages.home.sections.sfs_modules')

    @include('pages.home.sections.testimonials')

    @include('pages.home.sections.about')

    @include('pages.home.sections.faq')

    @include('pages.includes.footer')

@endsection
