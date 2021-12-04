
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

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="font-weight-light d-block"><i class="ti-user"></i> ADD SUB CATEGORY



                                <p class="card-description">
                                @include('backend.layouts.message')
                                <form action="{{route('add-sub-category')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <select name="cat_id" id="cat_id" class="form-control">
                                            @foreach($CategoryData as $Category)
                                                <option value="{{$Category->id}}">{{$Category->cat_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>




                                    <div class="form-group">
                                        <label for="title"><a style="color: red;">{{$errors->first('sub_cat_name')}}</a></label>
                                        <input type="text" name="sub_cat_name" value="{{old('sub_cat_name')}}"
                                               id="title" class="form-control" placeholder="Sub Category Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug"><a style="color: red;">{{$errors->first('slug')}}</a></label>
                                        <input type="text" name="slug" value="{{old('slug')}}" id="slug"
                                               class="form-control" placeholder="Slug">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label for="meta_keywords">Meta keywords</label>
                                        <input type="text" name="meta_keywords" id="meta_keywords" data-role="tagsinput"
                                               value="Trending,Advanture">
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_description"></label>
                                        <textarea name="meta_description" id="meta_description" class="form-control"
                                                  placeholder="Meta Description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="description"></label>
                                        <textarea name="description" id="description" class="form-control"></textarea>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <button class="btn btn-primary mr-2">Add Sub Category</button>
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
