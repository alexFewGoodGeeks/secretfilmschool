@extends('layouts.public.app')


@section('content')
<h1>Blog home</h1>


@foreach($posts as $post)

    <h2> {{ $post->title }}</h2>
    <pre><img src="{{ $post->featured_image }}" /></pre>
    <pre> {{ $post->content }}</pre>
    <a href="/article/{{$post->slug}}">Read more</a>
@endforeach

{{ $posts->links() }}


@endsection
