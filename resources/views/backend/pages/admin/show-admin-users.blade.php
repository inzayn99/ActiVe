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
                                <input type="text" name="search_admin_users" class="form-control" placeholder="type something">
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
                            <h4 class="font-weight-light d-block"><i class="ti-user"></i> SHOW USERS


                                <a href="{{route('add-admin-user')}}">
                                    <button class="btn btn-outline-primary btn-sm">Add new user
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
                                            <th>Name</th>
                                            <th>UserName</th>
                                            <th>Email</th>
                                            <th>User Types</th>
                                            <th>Status</th>
                                            <th>Images</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($userData as $key=>$users)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$users->name}}</td>
                                                <td>{{$users->username}}</td>
                                                <td>{{$users->email}}</td>
                                                <td>
                                                    <form action="{{route('update-admin-type')}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="criteria" value="{{$users->id}}">
                                                        @if($users->admin_type=='super-admin')
                                                            <button name="super_admin" title="Super admin"
                                                                    class="btn btn-success btn-sm">
                                                                Super
                                                                admin
                                                            </button>
                                                        @else
                                                            <button name="admin" title="Admin"
                                                                    class="btn btn-primary btn-sm">admin
                                                            </button>
                                                        @endif
                                                    </form>

                                                </td>


                                                <td>
                                                    <form action="{{route('update-admin-status')}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="criteria" value="{{$users->id}}">
                                                        @if ($users->status==1)
                                                            <button name="active"
                                                                    class="btn btn-outline-primary btn-xs">Active
                                                            </button>
                                                        @else
                                                            <button name="inactive"
                                                                    class="btn btn-outline-danger btn-xs">Inactive
                                                            </button>                                                        @endif
                                                    </form>

                                                </td>

                                                <td class="py-1"><img src="{{url('uploads/admins/'.$users->image)}}"
                                                                      alt=""></td>
                                                <td>
                                                    <a href="{{route('edit-admin-user').'/'.$users->id}}" class="btn btn-outline-primary btn-xs">Edit</a>


                                                    <a href="{{route('delete-admin-user').'/'.$users->id}}" class="btn btn-outline-primary btn-xs">Delete</a>
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
