@extends('backend.master.master')
@section('content')

    <body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
        </div>
    </div>


    <!-- contain -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="font-weight-light d-block">UPDATE ADMIN USER</h4>
                            <p class="card-description">
                                @include('backend.layouts.message')
                            </p>
                            <div class="row">
                                <div class="col-md-8"><form action="{{route('edit-admin-user-action')}}" method="post"
                                                            enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input type="hidden" name="criteria" value="{{$adminData->id}}">
                                        <div class="form-group">
                                            <label for="name">Name <a style="color: red;">{{$errors->first('name')}}</a></label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                                   value="{{$adminData->name}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="username">Username<a
                                                    style="color: red;">{{$errors->first('username')}}</a></label>
                                            <input type="text" name="username" class="form-control" id="name"
                                                   placeholder="Username"
                                                   value="{{$adminData->username}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email<a
                                                    style="color: red;">{{$errors->first('email')}}</a></label>
                                            <input type="text" name="email" class="form-control" id="name" placeholder="Email"
                                                   value="{{$adminData->email}}">
                                        </div>



                                        <div class="form-group">
                                            <label>Image upload<a style="color: red;">{{$errors->first('image')}}</a></label>
                                            <input type="file" name="image" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                       placeholder="Upload Image">
                                                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary mr-2">Update Record</button>
                                        </div>
                                    </form>
                                </div>
<div class="col-md-4">
    <img src="{{url('uploads/admins/'.$adminData->image)}}" alt="" class="img-fluid img-thumbnail"></div>


                        </div>
                    </div>

                    <!-- end contain -->


@endsection()

