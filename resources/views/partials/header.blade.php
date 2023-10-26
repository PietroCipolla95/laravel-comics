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
            @foreach($header_menu_items as $header_menu_item)
            <a class="nav-item nav-link" href="#">
                {{$header_menu_item}}
            </a>
            @endforeach
        </div>
        <!-- searchbar -->
        <div class="searchbar">
            <input type="text" placeholder="Search 🔍">
        </div>
    </nav>
</header>