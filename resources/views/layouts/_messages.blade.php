@if(session('success'))
    <div class="alert alert-success">
        <a href="javascript:void()" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> {{ session('success') }}
    </div>
@endif