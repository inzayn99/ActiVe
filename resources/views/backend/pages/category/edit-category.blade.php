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
                                <input type="text" name="search_category" class="form-control"
                                       placeholder="type something">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-outline-secondary btn-rounded btn-icon"><i class="ti-search"></i>
                                </button>
                            </div>
                        </div>
                        <br>


                    </form>
                </div>
                <br><br><br>
                {{------------------end search--}}
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="font-weight-light d-block"><i class="ti-user"></i> UPDATE CATEGORY


                                <a href="{{route('category')}}">
                                    <button class="btn btn-outline-primary btn-sm">Add new category
                                        {{--                                    <span class="d-inline-block text-left">Add new user</span>--}}
                                    </button>
                                </a>


                                <p class="card-description">
                                @include('backend.layouts.message')
                                <form action="{{route('edit-category-action')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" name="criteria" value="{{$categoryData->id}}">

                                    <div class="form-group">
                                        <label for="title"><a style="color: red;">{{$errors->first('cat_name')}}</a></label>
                                        <input type="text" name="cat_name" value="{{$categoryData->cat_name}}" placeholder="Category Name"
                                               id="title"
                                               class="form-control">
                                    </div>
                                    <br>


                                    <div class="form-group">
                                        <button class="btn btn-success mr-2">Update Category</button>
                                    </div>
                                </form>


                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content ends -->
@endsection()
