<div class="col-xl-8 ui-sortable">
    <div class="panel panel-inverse">
        <div class="panel-heading ui-sortable-handle">
            <h4 class="panel-title">Post settings</h4>
        </div>
        <div class="panel-body">
            <div class="form-group row m-b-15">
                {{ Form::label('title', 'Title', ['class' => 'col-form-label col-md-2']) }}
                <div class="col-md-10">
                    {{ Form::text('title', $post->title, ['class' => 'form-control m-b-5']) }}
                    @error('title')
                        <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                    @endif
                </div>
            </div>
            <div class="form-group row m-b-15">
                {{ Form::label('title', 'Content', ['class' => 'col-form-label col-md-2']) }}
                <div class="col-md-10">
                    <textarea name="content" class="summernote">{{$post->content}}</textarea>
                    @error('content')
                        <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 ui-sortable">
    <div class="panel panel-inverse">
        <div class="panel-heading ui-sortable-handle">
            <h4 class="panel-title">Post settings</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label">Status</label>
                    <div class="col-md-9">
                        <div class="form-check">
                            @if ($type == 'create')
                                <input class="form-check-input is-valid" type="radio" name="status" id="statusActive" value="active" checked />
                            @else
                                <input class="form-check-input is-valid" type="radio" name="status" id="statusActive" value="active"  {{ $post->status == 'active' ? 'checked="checked"' : '' }} />
                            @endif
                            <label class="form-check-label" for="statusActive">Active</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="radio" name="status" id="statusInactive" value="inactive"  {{ $post->status == 'inactive' ? 'checked="checked"' : '' }} />
                            <label class="form-check-label" for="statusInactive">Inactive</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="statusDraft" value="draft"  {{ $post->status == 'draft' ? 'checked="checked"' : '' }} />
                            <label class="form-check-label" for="statusDraft">Draft</label>
                        </div>
                    </div>
                </div>
            </div>

            <hr/>
            <div class="col-md-12">
                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label">Featured image</label>
                    <div class="col-md-9 row">
                        @if($post->featured_image)
                            <img src="{{ $post->featured_image }}" class="rounded img-thumbnail" />
                        @endif
                        {{Form::file('featured_image')}}
                        @error('featured_image')
                            <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                        @endif
                    </div>
                </div>
            </div>

            <hr/>
            <div class="col-md-12">
                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label">Time to read</label>
                    <div class="col-md-9 row">
                        {{ Form::number('time_to_read', $post->time_to_read, ['class' => 'form-control m-b-5']) }}
                        @error('time_to_read')
                            <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                        @endif
                    </div>
                </div>
            </div>

            <hr/>
            <div class="col-md-12">
                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label">@lang('messages.seo_keywords')</label>
                    <div class="col-md-9 row">
                        <textarea class="form-control" name="seo_keywords">{{ $post->seo_keywords }}</textarea>
                        <small class="f-s-12 text-grey-darker">@lang('messages.separate_with_comma')</small>
                        @error('seo_keywords')
                            <small class="f-s-12 text-grey-darker">{{ $message }}</small>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@section('custom_css')
    <link href="{{asset('admin/plugins/summernote/dist/summernote.css')}}" rel="stylesheet" />
@endsection

@section('custom_js')
    <script src="{{asset('admin/plugins/summernote/dist/summernote.min.js')}}"></script>
    <script>
        $('.summernote').summernote({
            height: $(window).height() - $('.summernote').offset().top - 80,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
