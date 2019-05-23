
@extends('layout.main')

@section('body')
    <h1>Welcome to Home Page</h1>
    <ul class="list">
        <li>First Name : {{Auth::user()->first_name}}</li>
        <li>Last Name : {{Auth::user()->last_name}}</li>
        <li>Email : {{Auth::user()->email}}</li>
        <li><a href="{{route('logout')}}">LogOut</a></li>
    </ul>
@endsection
