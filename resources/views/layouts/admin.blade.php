@extends('layouts.base')

@section('profile-name','Administrator')

@section('profile-photo')
<img src="{{ asset('images/faces/admin.png') }}" alt="profile"/>
@endsection

@section('flags')
<link rel="stylesheet" href="{{asset('public-part/css/flag.css')}}">
<li class="nav-item"><a href="{{ url('locale/it') }}" ><i class="italy flag"></i><a href="{{ url('locale/en') }}" ><i class="uk flag"></i></li>
@endsection


@section('left-navbar')
<nav class="sidebar sidebar-offcanvas position-fixed" id="sidebar">

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.modules.index') }}">
                <i class="mdi mdi-book-multiple-variant menu-icon"></i>
                <span class="menu-title">Modules</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.surveys.index') }}">
                <i class="mdi mdi-comment-question-outline menu-icon"></i>
                <span class="menu-title">Surveys</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <i class="mdi mdi-human-greeting menu-icon"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.groups.index') }}">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Groups</span>
            </a>
        </li>
    </ul>
</nav>
@endsection

@section('link_index')
     <a class="navbar-brand brand-logo" href="{{ route('admin.index') }}"><img src="{{ asset('public-part/img/logos/twitter_header_photo_2.jpg')}} " alt="logo"/></a>
@endsection