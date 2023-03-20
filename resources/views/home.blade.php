@extends('layouts.master')
@section('content')
<div class="rounded mt-5 mx-auto w-fit outline-0 shadow-lg">
    <div class="d-flex justify-content-between bg-emerald-300 rounded flex-shrink-0 p-3 link-dark border-bottom">
        @if (Auth::user())
        <span class="fs-5 fw-semibold"><a href="{{url("/library")}}">Welcome To Library, {{Auth::user()->name}}!</a></span>
        @else
        <span class="fs-5 fw-semibold"><a href="{{url("/library")}}">Welcome To Library!</a></span>
        @endif
        <ul tabindex="0" class="menu menu-compact rounded-box w-52">
            @guest
            <li><a href="{{route("register")}}">Register</a></li>
            <li><a href="{{route("login")}}">Login</a></li>
            @endguest
          </ul>
    </div>
</div>
@endsection