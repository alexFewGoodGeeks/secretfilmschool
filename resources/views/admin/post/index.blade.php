@extends('layouts.admin.app')

@section('content')
<h1 class="page-header">Show all posts</h1>

<div class="panel panel-inverse">
    <div class="panel-heading">
        <h4 class="panel-title">
            Show all posts
        </h4>
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table" id="posts-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Featured image</th>
                        <th>Status</th>
                        <td>Created at</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td><img src="{{ $post->featured_image }}" class="rounded" height="80" width="80"></td>
                        <td>{{ $post->status }}</td>
                        <td>{{ $post->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="" title="Preview">
                                <i class="fas fa-lg fa-fw m-r-5 fa-external-link-square-alt"></i>
                            </a>
                            <a href="{{ route('admin.posts.edit', $post->id) }}" title="Edit">
                                <i class="fas fa-lg fa-fw m-r-5 fa-edit"></i>
                            </a>
                            <a href="" title="Delete">
                                <i class="fas fa-lg fa-fw m-r-5 fa-trash"></i>
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
    </script>
@endsection
