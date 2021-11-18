@extends('layouts.public.app')

@section('content')

    @include('pages.includes.header')

    @include('pages.blackfriday.header')

    <script>
        window.UpviralConfig = {camp:"S&MARM",
            opacity:'0.6',
            close_popup:"yes"}
    </script>
    <script language="javascript" src="https://snippet.upviral.com/upviral.js"></script>

    <script>
        window.UpviralConfig = {camp:"S&MARM"}
    </script>
    <script language="javascript" src="https://snippet.upviral.com/upviral.js"></script>

    <section class="blog-container gdpr-section">
        <iframe class="uvembed123977" frameborder="0"
                src="https://static.upviral.com/loader.html" allowfullscreen="allowfullscreen"
        ></iframe>
        <script>
            window.UpviralConfig = {camp:"S&MARM",
                widget_style:'iframe',width:"100%"}
        </script>
        <script language="javascript" src="https://snippet.upviral.com/upviral.js"></script>
        <div class="col-md-12" style="text-align: centert">

        <a href="#uvembed123977" style="display: block; text-align: center">click here to open popup</a>
        </div>
    </section>


    @include('pages.includes.footer')

@endsection
