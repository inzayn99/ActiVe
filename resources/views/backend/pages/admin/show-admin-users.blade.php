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
                            <h4 class="card-title">SHOW USERS</h4>
                            <p class="card-description">
                                @include('backend.layouts.message')<code>{{date('D M y')}}</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>
                                            S.N
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            UserName
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            User Types
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Images
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <td>
                                        01.
                                    </td>
                                    <td>
                                        Herman Beck
                                    </td>
                                    <td>
                                        $ 77.99
                                    </td>
                                    <td>
                                        $ 77.99
                                    </td>
                                    <td>
                                        $ 77.99
                                    </td>
                                    <td>
                                        $ 77.99
                                    </td>
                                    <td class="py-1">
                                        <img src="../../images/faces/face1.jpg" alt="image"/>
                                    </td>
                                    <td>
                                        May 15, 2015
                                    </td>
                                    </tr>
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
