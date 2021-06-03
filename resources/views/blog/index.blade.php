@extends('layouts.public.app')

@section('content')

    @include('pages.includes.header')

    <header class="bg-image-full blog-bg-image module blog-heading">
        <div class="text-center  container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-heading-text title-text module-inside ">
                        <h1>SECRET FILM SCHOOL BLOG</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="blog-container">
        <div class="container">
            @foreach($posts as $post)

                <div class="post-wrapper {{ $loop->iteration % 2 === 0 ? "odd": "even" }}">
                    <div class="row">
                        <div class="post-featured-image col-lg-6 col-md-12">
                            <div class="image-wrapper">
                                <img width="100%" src="{{ $post->featured_image }}" />
                            </div>
                        </div>
                        <div class="post-content-wrapper col-lg-6 col-md-12">
                            <h2>{{ $post->title }}</h2>
                            <div class="content-intro">
                                {{ $post->content_intro }}
                            </div>
                            <div class="read-more-section">
                                <a href="#" class="sfs-btn-yellow sfs-btn">Read more</a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </section>




@endsection
