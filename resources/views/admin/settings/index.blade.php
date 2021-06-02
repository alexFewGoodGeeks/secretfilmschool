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
        <div class="col-xl-12 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <!-- begin panel-heading -->
                <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title">@lang('messages.general_site_settings')</h4>
                </div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'admin.settings.store', 'method' => 'post']) }}
                    <div class="form-group">
                        <h3>General settings</h3>
                    </div>

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

                    <hr/>
                    <div class="form-group">
                        <h3>Homepage links</h3>
                        <small>All links will open in new window</small>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-form-label col-md-3">@lang('messages.free_webinar_snippet')</label>
                        <div class="col-md-9">
                            {{ Form::text('free_webinar_snippet', $settings->free_webinar_snippet, ['class' => 'form-control']) }}
                            @error('free_webinar_snippet')
                            <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-form-label col-md-3">@lang('messages.inside_sfs_link')</label>
                        <div class="col-md-9">
                            {{ Form::text('inside_sfs_link', $settings->inside_sfs_link, ['class' => 'form-control']) }}
                            @error('inside_sfs_link')
                            <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-form-label col-md-3">@lang('messages.free_scholarship_link')</label>
                        <div class="col-md-9">
                            {{ Form::text('free_scholarship_link', $settings->free_scholarship_link, ['class' => 'form-control']) }}
                            @error('free_scholarship_link')
                            <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                            @endif
                        </div>
                    </div>


                    <hr/>
                    <div class="form-group">
                        <h3>Social networks</h3>
                        <small>Leave empty if you dont want to be displayed</small>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-form-label col-md-3">@lang('messages.fb_link')</label>
                        <div class="col-md-9">
                            {{ Form::text('fb_link', $settings->fb_link, ['class' => 'form-control']) }}
                            @error('fb_link')
                            <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-form-label col-md-3">@lang('messages.yt_link')</label>
                        <div class="col-md-9">
                            {{ Form::text('yt_link', $settings->yt_link, ['class' => 'form-control']) }}
                            @error('yt_link')
                            <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-form-label col-md-3">@lang('messages.tw_link')</label>
                        <div class="col-md-9">
                            {{ Form::text('tw_link', $settings->tw_link, ['class' => 'form-control']) }}
                            @error('tw_link')
                            <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row m-b-15">
                        <label class="col-form-label col-md-3">@lang('messages.ig_link')</label>
                        <div class="col-md-9">
                            {{ Form::text('ig_link', $settings->ig_link, ['class' => 'form-control']) }}
                            @error('ig_link')
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
