@if($message = Session::get('success'))
    <div class="alert alert-success alert-block alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
