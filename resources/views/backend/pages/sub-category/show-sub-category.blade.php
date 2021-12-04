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
                {{------------search-------------}}
                <div class="col-md-12">
                    <form action="">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="search_category" class="form-control" placeholder="type something">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon"><i class="ti-search"></i></button>
                            </div>
                        </div>


                    </form>
                </div>
                <br><br><br>
                {{------------------end search--}}
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="font-weight-light d-block"><i class="ti-user"></i> SHOW SUB CATEGORY


                                <a href="{{route('add-category')}}">
                                    <button class="btn btn-outline-primary btn-sm">Add new SUBcategory
                                        {{--                                    <span class="d-inline-block text-left">Add new user</span>--}}
                                    </button>
                                </a>


                                <p class="card-description">
                                    @include('backend.layouts.message')
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Cat_Name</th>
                                            <th>Status</th>
                                            <td>Posted By</td>
                                            <td>Created At</td>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($subCategoryData as $key=>$subCategory)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$subCategory->sub_cat_name}}</td>

                                                <td>{{$subCategory->CategoryData->cat_name}}</td>
                                                </td>
                                                <td>{{$subCategory->postedBy->username}}</td>
                                                <td>{{$subCategory->created_at->diffForHumans()}}</td>


                                                <td>

                                                    <a href="{{route('edit-category').'/'.$subCategory->id}}" class="btn btn-warning btn-xs">Edit</a>

                                                    <a href="{{route('delete-category').'/'.$subCategory->id}}" class="btn btn-danger btn-xs">Delete</a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content ends -->
@endsection()
