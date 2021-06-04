@extends('layouts.public.app')

@section('content')

    @include('pages.includes.header')

    @include('blog.sections.header')

        <h1> {{ $post->title }}</h1>

        <pre>{{ $post->content }}</pre>

        <a href="/blog">Back to home</a>

    <small style="display: none">{{ $settings->fb_link }}</small>

    @include('pages.includes.footer')
@endsection
