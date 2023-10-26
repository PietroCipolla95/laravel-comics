<footer>
    <!-- main footer -->
    <section class="main_footer">
        <div class="row my_container">
            <!-- columns on left with all links -->
            <div class="col-5">
                <div class="row my_h pt-4 flex-column g-0">

                    <!-- dinamic footer menus generations -->
                    @foreach($footer_items as $footer_item)
                    <div class="col-4 pb-4">
                        <h6>
                            {{$footer_item['title']}}
                        </h6>

                        <!-- dinamic footer links generations -->
                        <div class="d-flex flex-column">
                            @foreach($footer_item['links'] as $link)
                            <a href="{{$link['href']}}">
                                {{$link['name']}}
                            </a>
                            @endforeach
                        </div>

                    </div>
                    @endforeach

                </div>
                <div class="col-12 m-0">
                    <p class="rights">
                        All Site Content TM and 2020 DC Entertainment, unless otherwise
                        <a href="#" class="color_dc">noted here</a>. All rights reserved.
                        <a href="#" class="color_dc">Cookies Settings</a>
                    </p>
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