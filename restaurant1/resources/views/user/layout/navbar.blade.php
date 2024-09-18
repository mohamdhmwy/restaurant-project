<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area bg-img bg-overlay"
        style="background-image: url({{ asset('user/assets/img/bg-img/header.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-between">
                <div class="col-12 col-sm-6">
                    <!-- Top Social Info -->
                    <div class="top-social-info">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i
                                class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                                class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i
                                class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance"><i
                                class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i
                                class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-5 col-xl-4">
                    <!-- Top Search Area -->
                    <div class="top-search-area">
                        <form action="#" method="post">
                            <input type="search" name="top-search" id="topSearch" placeholder="Search">
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Area -->
    <div class="logo-area">
        <a href="{{ route('user') }}"><img src="{{ asset('user/assets/img/core-img/logo.png') }}" alt=""></a>
    </div>

    <!-- Navbar Area -->
    <div class="bueno-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="buenoNav">

                    <!-- Toggler -->
                    <div id="toggler"><img src="{{ asset('user/assets/img/core-img/toggler.png') }}" alt="">
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a style="{{ $route == 'homepage' ? 'color: #b0c364' : '' }}"
                                        href="{{ route('user') }}">{{ trans('home.Home') }}</a></li>
                                <li><a style="{{ $route == 'menu' ? 'color: #b0c364' : '' }}"
                                        href="{{ route('menus') }}">Menus</a></li>

                                <li><a style="{{ $route == 'category' ? 'color: #b0c364' : '' }}"
                                        href="{{ route('moreCategory') }}">Categories</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a>Main Category</a></li>
                                            <li><a href="{{ route('show_type', 'Break_fast') }}">-Breakfast</a></li>
                                            <li><a href="{{ route('show_type', 'Lunch') }}">- Lunch</a></li>
                                            <li><a href="{{ route('show_type', 'Dinner') }}">- Dinner</a></li>
                                            <li><a href="{{ route('show_type', 'Healthy_food') }}">- Healthy food</a>
                                            </li>
                                            <li><a href="{{ route('show_type', 'vegetarian') }}">- vegetarian</a></li>
                                            <li><a href="{{ route('show_type', 'Hot_Drinks') }}">- Hot Drinks</a></li>
                                            <li><a href="{{ route('show_type', 'Ice_Drinks') }}">- Ice Drinks</a></li>
                                            <li><a href="{{ route('show_type', 'Soft_Drinks') }}">- Soft Drinks</a>
                                            </li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="#">Sprcial Menu</a></li>
                                            @foreach (Helper::special_menu_navbar() as $menu)
                                                <li><a
                                                        href="{{ route('singel_menu', [$menu->category->slug, $menu->slug]) }}">-
                                                        {{ $menu->name }}</a></li>
                                            @endforeach

                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="#">Sprcial Menu</a></li>
                                            @foreach (Helper::special_menu_navbar2() as $menu)
                                                <li><a
                                                        href="{{ route('singel_menu', [$menu->category->slug, $menu->slug]) }}">-
                                                        {{ $menu->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a>All Category</a></li>
                                            @foreach (Helper::category_navbar() as $category)
                                                <li><a href="{{ route('show_category', $category->slug) }}">-
                                                        {{ $category->name }}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>

                                </li>
                                <li><a href="{{ route('show_Reservation_Form') }}"
                                        style="{{ $route == 'Reservation' ? 'color: #b0c364' : '' }}">Reservation</a>
                                    {{-- <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="catagory.html">Catagory</a></li>
                                        <li><a href="catagory-post.html">Catagory Post</a></li>
                                        <li><a href="single-post.html">Single Post</a></li>
                                        <li><a href="receipe.html">Recipe</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="{{ route('blogs') }}"
                                        style="{{ $route == 'blog' ? 'color: #b0c364' : '' }}">Blog</a></li>
                                <li><a href="{{ route('contact') }}"
                                        style="{{ $route == 'contact' ? 'color: #b0c364' : '' }}">Contact</a></li>
                            </ul>

                            <!-- Login/Register -->
                            <div class="login-area">
                                <div class="row">
                                    @if (Route::has('login'))
                                        @auth

                                            {{-- <li><a >
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                            <button class="btn btn-black" type="submit">Logout</button>

                                                        </form>
                                                    </a></li> --}}
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                                    role="button" aria-haspopup="true" aria-expanded="true"> <span
                                                        class="nav-label">{{ Auth::user()->name }}
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdown04">

                                                    <a class="dropdown-item">
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                            <button type="submit" class="btn btn-white">Logout</button>

                                                        </form>
                                                    </a>
                                                </div>
                                            </li>


                                            <a style="margin-left: 60px; {{ $route == 'cartpage' ? 'color: #b0c364' : '' }}"
                                                href="{{ route('show_cart') }}">
                                                <?xml version="1.0" encoding="utf-8"?><svg version="1.1"
                                                    style="width: 35px" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 113.53 96.07"
                                                    style="enable-background:new 0 0 113.53 96.07" xml:space="preserve">
                                                    <style type="text/css">
                                                        <![CDATA[
                                                        .st0 {
                                                            fill-rule: evenodd;
                                                            clip-rule: evenodd;
                                                            fill: #4BA042;
                                                        }

                                                        .st1 {
                                                            fill: #393939;
                                                        }
                                                        ]]>
                                                    </style>
                                                    <g>
                                                        <path class="st1"
                                                            d="M3.49,7.06C1.61,7.06,0,5.45,0,3.49C0,1.61,1.61,0,3.49,0h9.12c0.09,0,0.27,0,0.36,0 c3.22,0.09,6.08,0.71,8.49,2.23c2.68,1.7,4.65,4.29,5.72,8.13c0,0.09,0,0.18,0.09,0.27l0.89,3.57h34.01 c-6.79,16.17-0.71,38.05,18.25,43.97H39.95c1.25,4.65,2.5,7.15,4.2,8.31c2.06,1.34,5.63,1.43,11.62,1.34h0.09l0,0h40.4 c1.97,0,3.48,1.61,3.48,3.49c0,1.96-1.61,3.48-3.48,3.48h-40.4l0,0c-7.42,0.09-11.98-0.09-15.64-2.5 c-3.75-2.5-5.72-6.79-7.69-14.57l0,0L20.56,12.42c0-0.09,0-0.09-0.09-0.18c-0.54-1.97-1.43-3.31-2.68-4.02 c-1.25-0.8-2.95-1.16-4.92-1.16c-0.09,0-0.18,0-0.27,0H3.49L3.49,7.06L3.49,7.06z M85.79,78.91c4.74,0,8.58,3.84,8.58,8.58 c0,4.74-3.84,8.58-8.58,8.58s-8.58-3.84-8.58-8.58C77.22,82.76,81.06,78.91,85.79,78.91L85.79,78.91L85.79,78.91z M48.17,78.91 c4.74,0,8.58,3.84,8.58,8.58c0,4.74-3.84,8.58-8.58,8.58c-4.74,0-8.58-3.84-8.58-8.58C39.59,82.76,43.43,78.91,48.17,78.91 L48.17,78.91L48.17,78.91z" />
                                                        <path class="st0"
                                                            d="M91.02,5.28c12.43,0,22.51,10.08,22.51,22.51c0,12.43-10.08,22.51-22.51,22.51 C61.42,50.3,61.42,5.28,91.02,5.28L91.02,5.28L91.02,5.28z M81.06,28.39c0.3-1.75,2.3-2.73,3.88-1.78c0.14,0.09,0.28,0.19,0.41,0.3 l0.01,0.01c0.71,0.68,1.5,1.39,2.28,2.08l0.68,0.6l8-8.39c0.48-0.5,0.83-0.83,1.55-0.99c2.45-0.54,4.18,2.46,2.45,4.29L90.34,35 c-0.94,1-2.62,1.09-3.63,0.13c-0.58-0.53-1.21-1.08-1.84-1.64c-1.1-0.96-2.22-1.94-3.14-2.9C81.17,30.05,80.93,29.14,81.06,28.39 L81.06,28.39L81.06,28.39L81.06,28.39z" />
                                                    </g>
                                                </svg>
                                                {{-- <svg id="Layer_1" data-name="Layer 1"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 104.43"
                                                    style="width: 35px">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill-rule: evenodd;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="cls-1"
                                                        d="M97,0A25.9,25.9,0,1,1,78.67,7.59,25.79,25.79,0,0,1,97,0ZM3.66,10.89a3.71,3.71,0,0,1,0-7.42H9.11A17.3,17.3,0,0,1,18,5.81c4.92,3.12,5.79,7.57,7,12.59H66.7a31,31,0,0,0-.9,7.33H27.14L35.5,57.19H94.77l0-.18c.72.05,1.44.08,2.17.08a31.59,31.59,0,0,0,5.46-.48l-1.29,5.18a3.62,3.62,0,0,1-3.57,2.82H37.47c1.32,4.88,2.63,7.51,4.42,8.74,2.16,1.4,5.92,1.5,12.21,1.4H96.64a3.67,3.67,0,1,1,0,7.33H54.19c-7.79.09-12.58-.09-16.44-2.63s-6-7.14-8.07-15.31h0L17.09,16.52c0-.09,0-.09-.09-.19a6.51,6.51,0,0,0-2.82-4.22A9.51,9.51,0,0,0,9,10.89H3.66ZM60.87,33.47a2.6,2.6,0,0,1,5.11,0V47.63a2.6,2.6,0,0,1-5.11,0V33.47Zm-15.3,0a2.6,2.6,0,0,1,5.11,0V47.63a2.6,2.6,0,0,1-5.11,0V33.47ZM85.66,86.4a9,9,0,1,1-9,9,9,9,0,0,1,9-9Zm-39.55,0a9,9,0,1,1-9,9,9,9,0,0,1,9-9Zm64.08-62.91V28.3a2.09,2.09,0,0,1-2.07,2.07h-6.66V37a2.08,2.08,0,0,1-2.07,2.07H94.58A2.07,2.07,0,0,1,92.51,37V30.37H85.85a2.08,2.08,0,0,1-2.07-2.07V23.49a2.07,2.07,0,0,1,2.07-2.07h6.66V14.76a2.07,2.07,0,0,1,2.07-2.07h4.81a2.08,2.08,0,0,1,2.07,2.07v6.66h6.66a2.08,2.08,0,0,1,2.07,2.07Z" />
                                                </svg> --}}
                                            </a><sub
                                                style="font-size: 13px; color: #4BA042">{{ number_format(Helper::CountCart()) }}</sub>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}">Login /</a>
                                    <a href="{{ route('register') }}">Register</a>
                                @endauth
                                @endif

                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
