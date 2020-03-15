@extends('layouts.base')

@section('profile-settings')
<a class="dropdown-item" href="{{ route('user.user.edit', ['user' => Auth::id()]) }}">
    <i class="mdi mdi-settings text-primary"></i>
    {{__('indexes.settings')}}
</a>
@endsection

@section('search-bar')
@yield('search')
@endsection

@section('profile-name','Name User')

@section('profile-photo')
<img src="{{ asset('images/faces/user.png')}}" alt="profile"/>
@endsection

@section('flags')
<link rel="stylesheet" href="{{asset('public-part/css/flag.css')}}">
<li class="nav-item"><a href="{{ url('locale/it') }}" ><i class="italy flag"></i><a href="{{ url('locale/en') }}" ><i class="uk flag"></i></li>
@endsection

@section('left-navbar')
<nav class="sidebar sidebar-offcanvas position-fixed" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.surveys.index') }}">
                <i class="mdi mdi-comment-question-outline menu-icon"></i>
                <span class="menu-title">New {{__('indexes.surveys')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.surveys.indexCompleted') }}">
                <i class="mdi mdi-comment-check-outline menu-icon"></i>
                <span class="menu-title">Completed {{__('indexes.surveys')}}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.groups.index') }}">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">{{__('indexes.groups')}}</span>
            </a>
        </li>
    </ul>
</nav>
@endsection

@section('link_index')
     <a class="navbar-brand brand-logo" href="{{ route('user.index') }}"><img src="{{ asset('public-part/img/logos/twitter_header_photo_2.jpg')}} " alt="logo"/></a>
@endsection