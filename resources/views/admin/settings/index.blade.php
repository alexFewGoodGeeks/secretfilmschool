@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-md-12 inline">
            <h1 class="page-header">@lang('messages.settings')</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 inline panel-body">
            @include('admin.includes.flash')
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <!-- begin panel-heading -->
                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">@lang('messages.general_site_settings')</h4>
                </div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'admin.settings.store', 'method' => 'post']) }}
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3">@lang('messages.site_name')</label>
                            <div class="col-md-9">
                                {{ Form::text('site_name', $settings->site_name, ['class' => 'form-control']) }}
                                @error('site_name')
                                    <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                                @endif
                            </div>
                        </div>

                    <div class="form-group row m-b-15">
                        <label class="col-form-label col-md-3">@lang('messages.google_analytics')</label>
                        <div class="col-md-9">
                            {{ Form::text('google_analytics', $settings->google_analytics, ['class' => 'form-control']) }}
                            @error('google_analytics')
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

                <!-- end hljs-wrapper -->
            </div>
            <!-- end panel -->

            <!-- end panel -->
        </div>
    </div>
@endsection
