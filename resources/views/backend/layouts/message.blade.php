@if(session('success'))
    <div class="alert alert-fill-success" role="alert">
        <i class="ti-info-alt"></i>
    {{session('success')}}
    </div>
@endif



@if(session('error'))
    <
    <div class="alert alert-fill-danger" role="alert">
        <i class="ti-info-alt"></i>
    {{session('error')}}
    </div>
@endif
