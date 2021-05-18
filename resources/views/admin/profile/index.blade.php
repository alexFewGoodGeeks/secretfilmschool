@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-md-12 inline">
            <h1 class="page-header">@lang('messages.profile')</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12 inline panel-body">
            @include('admin.includes.flash')
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="ui-sortable">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <!-- begin panel-heading -->
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">Profile details</h4>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(['route' => 'admin.profile.update', 'method' => 'put']) }}
                        {{ Form::hidden('id', $user->id) }}
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3">First name</label>
                            <div class="col-md-9">
                                {{ Form::text('name', $user->name, ['class' => 'form-control']) }}
                                @error('name')
                                    <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3">Last name</label>
                            <div class="col-md-9">
                                {{ Form::text('last_name', $user->last_name, ['class' => 'form-control']) }}
                                @error('last_name')
                                    <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="btn-primary btn">@lang('messages.save') <i class="fa fa-check"></i></button>
                        </div>

                        {{ Form::close() }}
                    </div>
                    <!-- end panel-body -->
                </div>
                <!-- end panel -->
            </div>
            <div class="ui-sortable">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <!-- begin panel-heading -->
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">Password management</h4>
                    </div>
                    <div class="panel-body">
                        {{ Form::open(['route' => 'admin.password.update', 'method' => 'put']) }}
                        {{ Form::hidden('id', $user->id) }}
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3">New password</label>
                            <div class="col-md-9">
                                {{ Form::password('password', ['class' => 'form-control']) }}
                                @error('password')
                                <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3">Password confirmation</label>
                            <div class="col-md-9">
                                {{ Form::password('password_confirm', ['class' => 'form-control']) }}
                                @error('password_confirm')
                                <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="btn-primary btn">@lang('messages.save') <i class="fa fa-check"></i></button>
                        </div>

                        {{ Form::close() }}
                    </div>
                    <!-- end panel-body -->
                </div>
                <!-- end panel -->
            </div>

        </div>

        <div class="col-xl-6">
            <div class="ui-sortable">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <!-- begin panel-heading -->
                    <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">Password management</h4>
                    </div>
                    <div class="panel-body">
                        <form action="/upload" class="dropzone needsclick" id="demo-upload">

                        <div id="dropzone">
                                <div class="dz-message needsclick">
                                    Drop files <b>here</b> or <b>click</b> to upload.<br />
                                </div>


                        </div>

                        <div class="col-md-12">
                            <button class="btn-primary btn">@lang('messages.save') <i class="fa fa-check"></i></button>
                        </div>
                        </form>
                    </div>
                    <!-- end panel-body -->
                </div>
                <!-- end panel -->
            </div>
        </div>
    </div>
@endsection

@section('custom_css')
    <link href="{{asset('/admin/plugins/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet" />
@endsection

@section('custom_js')
    <script src="{{asset('/admin/plugins/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{asset('/admin/plugins/highlight.js/highlight.min.js')}}"></script>
    <script src="{{asset('/admin/js/demo/render.highlight.js')}}"></script>
@endsection
