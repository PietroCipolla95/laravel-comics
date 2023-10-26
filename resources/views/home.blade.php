<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <div id="banner" class="bg-dc py-2">
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
    </header>


    <section class="jumbotron">
        <div class="my_container py-5">
        </div>
    </section>


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





</body>

</html>