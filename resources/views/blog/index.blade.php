@extends('layouts.public.app')

@section('content')

    @include('pages.includes.header')

    @include('blog.sections.header')

    <section class="blog-container">
        <div class="container">
            @forelse($posts as $post)

                <div class="post-wrapper {{ $loop->iteration % 2 === 0 ? "odd": "even" }}">
                    <div class="row">
                        <div class="post-featured-image col-lg-6 col-md-12">
                            <div class="image-wrapper">
                                <img width="100%" src="{{ $post->featured_image }}" />
                            </div>
                        </div>
                        <div class="post-content-wrapper col-lg-6 col-md-12">
                            <h2 class="content-title">
                                <a href="/article/{{ $post->slug }}">{{ $post->title }}</a>
                            </h2>
                            <div class="post-details">
                                <div class="author">
                                    <i class="far fa-user"></i> {{ $post->user->name }} {{ $post->user->last_name }}
                                </div>
                                <div class="time-to-read">
                                    <i class="far fa-clock"></i> {{ $post->time_to_read }} <span class="min">min</span>
                                </div>
                            </div>
                            <div class="content-intro">
                                {!! $post->content_intro !!}
                            </div>
                            <div class="read-more-section">
                                <a href="/article/{{ $post->slug }}" class="sfs-btn-yellow sfs-btn">Read more</a>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <h1>No posts were found yet!</h1>
            @endforelse
            <div class="pagination">
                {{ $posts->links() }}
            </div>
        </div>
    </section>

    <small style="display: none">{{ $settings->fb_link }}</small>

    @include('pages.includes.footer')

@endsection
