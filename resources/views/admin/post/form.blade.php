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
                        <div class="radio radio-css">
                            {{ Form::label('status_active', 'Active') }}
                            {{ Form::radio('status', 'active', true) }}
                        </div>
                        <div class="radio radio-css is-invalid">
                            {{ Form::label('status_inactive', 'Inactive') }}
                            {{ Form::radio('status', 'inactive') }}
                        </div>
                        <div class="radio radio-css is-valid">
                            {{ Form::label('status_draft', 'Draft') }}
                            {{ Form::radio('status', 'draft', true, ['id' => 'status_draft']) }}
                        </div>
                    </div>
                </div>
            </div>

            <hr/>
            <div class="col-md-12">
                <div class="form-group row m-b-10">
                    <label class="col-md-3 col-form-label">Featured image</label>
                    <div class="col-md-9">
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
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
