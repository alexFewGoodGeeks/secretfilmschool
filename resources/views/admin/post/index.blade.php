@extends('layouts.admin.app')

@section('content')
<div class="col-md-12 inline">
    <h1 class="page-header">@lang('messages.show_all_posts')</h1>
</div>
<div class="panel panel-inverse">
    <div class="panel-heading">
        <h4 class="panel-title">
            @lang('messages.show_all_posts')
        </h4>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-indigo">New post <i class="fa fas fa-plus"></i></a>
    </div>
    <div class="panel-body">
        @include('admin.includes.flash')
        <div class="table-responsive">
            <table class="table" id="posts-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('messages.title')</th>
                        <th>@lang('messages.featured_image')</th>
                        <th>@lang('messages.status')</th>
                        <td>@lang('messages.created_at')</td>
                        <td>@lang('messages.actions')</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td><img src="{{ $post->featured_image }}" class="rounded" height="80" width="80"></td>
                        <td>@include('admin.post.status')</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="" title="Preview">
                                <i class="fas fa-lg fa-fw m-r-5 fa-external-link-square-alt"></i>
                            </a>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" title="Edit">
                                <i class="fas fa-lg fa-fw m-r-5 fa-edit"></i>
                            </a>
                            <a href="" title="Delete" class="delete-item" >
                                <i class="fas fa-lg fa-fw m-r-5 fa-trash"></i>
                                <form class="delete-form" data-item-id="{{ $post->id }}" action="{{ route('admin.posts.delete', $post->id) }}" method="POST" class="d-none">
                                    @method('delete')
                                    @csrf
                                </form>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end panel -->
@endsection

@section('custom_js')
    <script>
        $('#posts-table').DataTable({
            responsive: true,
            "order": [[0, "desc"]]
        });

        $(".delete-item").click(function(e) {
            var _this = $(this);
            e.preventDefault();
            if (confirm("Delete?")) {
                _this.find(".delete-form")[0].submit();
            }
        })
    </script>
@endsection
