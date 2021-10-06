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
                            <h4 class="card-title">ADD USER</h4>
                            <p class="card-description">
                                @include('backend.layouts.message')<code>{{date('D M y')}}</code>
                            </p>


                            <form action="{{route('add-admin-user')}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="name">Name <a style="color: red;">{{$errors->first('name')}}</a></label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                           value="{{old('name')}}">
                                </div>

                                <div class="form-group">
                                    <label for="username">Username<a
                                            style="color: red;">{{$errors->first('username')}}</a></label>
                                    <input type="text" name="username" class="form-control" id="name"
                                           placeholder="Username"
                                           value="{{old('username')}}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email<a
                                            style="color: red;">{{$errors->first('email')}}</a></label>
                                    <input type="text" name="email" class="form-control" id="name" placeholder="Email"
                                           value="{{old('email')}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password<a
                                            style="color: red;">{{$errors->first('password')}}</a></label>
                                    <input type="password" name="password" class="form-control" id="password"
                                           placeholder="Password"
                                           value="{{old('password')}}">
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password: <a
                                            style="color: red;">{{$errors->first('password_confirmation')}}</a></label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                           id="password_confirmation"
                                           placeholder="Confirm Password"
                                           value="{{old('password_confirmation')}}">
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
                                    <button class="btn btn-primary mr-2">Add Record</button>
                                </div>
                            </form>
                            </form>
                        </div>
                    </div>

                    <!-- end contain -->


@endsection()

