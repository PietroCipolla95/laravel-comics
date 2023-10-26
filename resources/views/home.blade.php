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

    <!-- header -->
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

    <!-- footer -->
    <footer>
        <!-- main footer -->
        <section class="main_footer">
            <div class="row my_container flex-nowrap">
                <!-- columns on left with all links -->
                <div class="col-5 py-4">
                    <div class="row py-4">
                        <!-- dc comics and shop col wrapper -->
                        <div class="col-4">
                            <!-- DC comics section -->
                            <div class="col-12">
                                <h6>
                                    DC COMICS
                                </h6>
                                <div class="d-flex flex-column">
                                    <a href="#">
                                        Characters
                                    </a>
                                    <a href="#">
                                        Comics
                                    </a>
                                    <a href="#">
                                        Movies
                                    </a>
                                    <a href="#">
                                        TV
                                    </a>
                                    <a href="#">
                                        Games
                                    </a>
                                    <a href="#">
                                        Videos
                                    </a>
                                    <a href="#">
                                        Games
                                    </a>
                                </div>
                            </div>
                            <!-- Shop section -->
                            <div class="col-12 pt-4">
                                <h6>
                                    SHOP
                                </h6>
                                <div class="d-flex flex-column">
                                    <a href="#">
                                        Shop DC
                                    </a>
                                    <a href="#">
                                        Shop DC Collectibles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Dc section -->
                        <div class="col-4">
                            <h6>
                                DC
                            </h6>
                            <div class="d-flex flex-column">
                                <a href="#">
                                    Terms of use
                                </a>
                                <a href="#">
                                    Privacy policy (New)
                                </a>
                                <a href="#">
                                    Ad Choices
                                </a>
                                <a href="#">
                                    Advertising
                                </a>
                                <a href="#">
                                    Jobs
                                </a>
                                <a href="#">
                                    Subscriptions
                                </a>
                                <a href="#">
                                    Talent Workshop
                                </a>
                                <a href="#">
                                    CPSC Certificates
                                </a>
                                <a href="#">
                                    Ratings
                                </a>
                                <a href="#">
                                    Shop Help
                                </a>
                                <a href="#">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                        <!-- Sites section -->
                        <div class="col-4">
                            <h6>
                                SITES
                            </h6>
                            <div class="d-flex flex-column">
                                <a href="#">
                                    DC
                                </a>
                                <a href="#">
                                    MAD Magazine
                                </a>
                                <a href="#">
                                    DC Kids
                                </a>
                                <a href="#">
                                    DC Universe
                                </a>
                                <a href="#">
                                    DC Power Vista
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right side with logo bg -->
                <div class=".col-7 logo d-flex flex-shrink-1 align-self-center justify-content-center">
                </div>
            </div>
        </section>
        <!-- bottom footer -->
        <section class="bottom_footer">
            <div class="row my_container py-5 align-items-center justify-content-between">
                <!-- col with sign up button -->
                <div class="col-6">
                    <button type="button" class="btn my_border text-light P-2">SIGN UP NOW</button>
                </div>
                <!-- col with follow us and medias -->
                <div class="col-5 d-flex align-items-center justify-content-between">
                    <p class="follow">FOLLOW US</p>
                    <!-- wrapper with medias -->
                    <div class="media_wrapper text-dark pb-3">
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/footer-facebook.png')}}" alt="" srcset="">
                        </a>
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/footer-pinterest.png')}}" alt="" srcset="">
                        </a>
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/footer-periscope.png')}}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/footer-youtube.png')}}" alt="" srcset="">
                        </a>
                        <a href="#">
                            <img src="{{Vite::asset('resources/images/footer-twitter.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </footer>





</body>

</html>