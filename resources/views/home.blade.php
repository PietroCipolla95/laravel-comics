@extends('layouts.app')


@section('main')

<!-- jumbotron -->
<section class="jumbotron">
    <div class="my_container py-5">
    </div>
</section>


<!-- comics section -->
<div class="comics_section">
    <!-- cards row -->
    <div class="row pt-5 my_container">
        <!-- current series hover -->
        <div class="current_series position-relative">
            <div class="bg-dc px-3 py-2 my_btn_abs rounded-0 px-4 text-light">
                <h5 class="fs-4">
                    CURRENT SERIES
                </h5>
            </div>
        </div>

        @foreach($comics as $comic)
        <div class="col-2 mb-3">
            <div class="card bg-transparent border-0">
                <div class="comics_img">
                    <img src="{{$comic['thumb']}}">
                </div>
                <div class="comic_title pt-2">
                    <p class="text-light">
                        {{$comic['title']}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="pb-3 d-flex justify-content-center">
        <button class="btn bg-dc rounded-0 px-4 py-2 text-light fw-bolder">
            LOAD MORE
        </button>
    </div>
</div>

<!-- DC Tools -->
<section class="py-5 tools">
    <div class="wrapper d-flex tools_container justify-content-between align-items-center">
        <div class="col-2">
            <a href="#">
                <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
                <span>DIGITAL COMICS</span>
            </a>
        </div>
        <div class="col-2">
            <a href="#">
                <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="" srcset="">
                <span>DC MERCHANDISE</span>
            </a>
        </div>
        <div class="col-2">
            <a href="#">
                <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="" srcset="">
                <span>SUBSCRIPTION</span>
            </a>
        </div>
        <div class="col-2">
            <a href="#">
                <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="" srcset="" class="comic_shop">
                <span>COMIC SHOP LOCATION</span>
            </a>
        </div>
        <div class="col-2">
            <a href="#">
                <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" srcset="">
                <span>DC POWER VISA</span>
            </a>
        </div>
    </div>
</section>

@endsection