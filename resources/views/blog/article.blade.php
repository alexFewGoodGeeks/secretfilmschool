@extends('layouts.public.app')

@section('content')

    @include('pages.includes.header')

    @include('blog.sections.header')

    <section id="article" class="article-wrapper">
        <div class="container">
            <div class="title-wrapper">
                <h2> {{ $post->title }}</h2>
            </div>

            <div class="details-wrapper">
                <div class="author">
                    <i class="far fa-user"></i> {{ $post->user->name }} {{ $post->user->last_name }}
                </div>
                <div class="time-to-read">
                    <i class="far fa-clock"></i> {{ $post->time_to_read }} <span class="min">min</span>
                </div>
                <div class="date-published">
                    <i class="far fa-calendar"></i> {{ $post->created_at->diffForHumans() }}
                </div>
            </div>

            <div class="featured-image-wrapper">
                <img src="{{ $post->featured_image }}" />
            </div>

            <div class="content-wrapper">
                {{ $post->content }}
            </div>


        </div>
    </section>


    <small style="display: none">{{ $settings->fb_link }}</small>

    @include('pages.includes.footer')
@endsection
