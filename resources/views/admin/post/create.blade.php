@extends('layouts.admin.app')

@section('content')
    <h1 class="page-header">@lang('messages.create_post')</h1>

        {!! Form::model($post, ['route' => ['admin.posts.store'], 'method' => 'post', 'class' => 'row', 'files' => true]) !!}

        @include('admin.post.form', ['post' => $post, 'type' => 'create'])

        <div class="col-md-12">
            <button class="btn-primary btn">@lang('messages.save') <i class="fa fa-check"></i></button>
            <a href="{{ route('admin.posts.index') }}" class="btn btn-danger">Back <i class="fas fa-lg fa-fw m-r-10 fa-backward"></i></a>
        </div>

        {!! Form::close() !!}

    <!-- end panel -->
@endsection


