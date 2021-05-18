@if(session('success'))
    <div class="alert alert-green fade show">
        <span class="close" data-dismiss="alert">×</span>
        <strong>Success!</strong>
        {{ session('success') }}
    </div>
@endif
