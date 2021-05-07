@extends('layouts.admin.app')

@section('content')
    <h1 class="page-header">Create post</h1>

        {!! Form::model($post, ['route' => ['admin.posts.store'], 'method' => 'post', 'class' => 'row', 'files' => true]) !!}

        @include('admin.post.form', ['post' => $post, 'type' => 'create']);

        <div class="col-md-12">
            <button class="btn-primary btn">SAVE <i class="fa fa-check"></i></button>
        </div>

        {!! Form::close() !!}

    <!-- end panel -->
@endsection


