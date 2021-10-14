@extends('frontend.master.master')

@section('content')


<h1>Welcome To {{Auth::guard('web')->user()->username}} Page</h1>

@endsection
