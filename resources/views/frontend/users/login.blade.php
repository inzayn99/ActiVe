@extends('frontend.master.master')

@section('content')
    <h1>login page</h1>
    @include('backend.layouts.message')
    <form action="" method="post">
        {{csrf_field()}}
        <div class="form-group">

            <label for="username">username <a style="color: red">{{$errors->first('username')}}</a></label>
            <input type="text" name="username" class="form-control" id="username">


            <label for="password">password <a style="color: red">{{$errors->first('password')}}</a></label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="form-group">
            <button>login</button>
        </div>
        <a href="">forget password</a>
    </form>

@endsection
