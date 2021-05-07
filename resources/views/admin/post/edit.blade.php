@extends('layouts.admin.app')

@section('content')
<h1 class="page-header">Edit post</h1>


    {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'put', 'class' => 'row', 'files' => true]) !!}

        @include('admin.post.form', ['post' => $post, 'type' => 'edit']);

        <div class="col-md-12">
            <button class="btn-primary btn">SAVE <i class="fa fa-check"></i></button>
        </div>

    {!! Form::close() !!}

<!-- end panel -->
@endsection


