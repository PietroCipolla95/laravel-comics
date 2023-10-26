@extends('layouts.home')

@section('header')


<div id="banner" class="bg-dc">
    <div class="my_container d-flex justify-content-end align-items-center text-light">
        <span class="px-4">
            DC POWER VISA
        </span>
        <div class="dropdown-center">
            <button class="btn dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                ADDITIONAL DC SITES
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Action two</a></li>
                <li><a class="dropdown-item" href="#">Action three</a></li>
            </ul>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand navbar-light p-0 d-flex justify-content-between my_container">
    <!-- nav logo -->
    <div class="py-4">
        <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="" srcset="">
    </div>
    <!-- nav links -->
    <div class="nav navbar-nav">
        <a class="nav-item nav-link" href="#">CHARACTERS</a>
        <a class="nav-item nav-link" href="#">COMICS</a>
        <a class="nav-item nav-link" href="#">MOVIES</a>
        <a class="nav-item nav-link" href="#">TV</a>
        <a class="nav-item nav-link" href="#">GAMES</a>
        <a class="nav-item nav-link" href="#">COLLECTIBLES</a>
        <a class="nav-item nav-link" href="#">VIDEOS</a>
        <a class="nav-item nav-link" href="#">FANS</a>
        <a class="nav-item nav-link" href="#">NEWS</a>
        <a class="nav-item nav-link" href="#">SHOP</a>
    </div>
</nav>




@endsection