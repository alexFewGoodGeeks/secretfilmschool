@if(session('success'))
    <div class="alert alert-success fade show">
        <span class="close" data-dismiss="alert">×</span>
        <strong>Success!</strong>
        {{ session('success') }}
    </div>
@endif
