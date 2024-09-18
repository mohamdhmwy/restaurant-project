@extends('user.master')
@section('css')
    <link href="{{ asset('user/menu/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" /> --}}
@endsection
@section('body')
@section('title')
    Menu
@endsection
{{-- <section class="">

    <div style="height: 700px;width: 2000px;background-color: black">
        <div class="container">
            <div class="col-12">
                <div class="row">

                    <div class="col-2" style=" ">
                        <img src="{{ asset('user/assets/img/bg-img/hero-bg.jpg') }}"
                            style="height: 700px;width: 600px;">
                    </div>

                    <div class="col-6" style="margin-top: 70px">
                        <h1 style="color: white">Menu</h1>
                        <h2>Bueno Restaurant</h2>
                        <h2 style="color: white">
                            The menu is comprehensive and alluring. Dishes are authentic but not traditional with bold,
                            intense
                            flavours and an emphasis on simple presentation acquired through quality ingredients. There
                            is
                            no
                            set
                            protocol on ordering from the menu; izakaya style means that dishes are designed to be
                            shared at
                            the
                            table.
                        </h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section> --}}
<section id="specials" class="specials" style="background-color: black;margin-top: 50px">

    <div class="big-posts-area mb-50" style="background-color: black;height: 500px">
        <div class="container">


            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="big-post-content text-center mb-50">
                        <a class="post-tag">Menu</a>
                        <a style="color: #7e809d" class="post-title">Bueno Restaurant</a>

                        <p>The menu is comprehensive and alluring. Dishes are authentic but not traditional with bold,
                            intense flavours and an emphasis on simple presentation acquired through quality
                            ingredients.
                            There is no set protocol on ordering from the menu; izakaya style means that dishes are
                            designed
                            to be shared at the table.</p>
                        <a href="{{ route('show_Reservation_Form') }}" class="btn bueno-btn"
                            style="background-color: #18181c">Make a Reservation</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="big-post-thumbnail mb-50">
                        <img src="{{ asset('user/assets/img/bg-img/insta2.jpg') }}" style="height: 600px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Menu</h2>
            <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach ($categories as $category)
                        <li data-filter=".filter-{{ $category->id }}">
                            {{ $category->name }}</li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($categories as $category)
                @foreach ($category->menu as $menu)
                    @if ($menu->is_showing == 1)
                        <a href="{{ route('singel_menu', [$category->slug, $menu->slug]) }}">
                            <div class="col-lg-6 menu-item filter-{{ $category->id }}">
                                <img src="{{ Storage::url($menu->image) }}" class="menu-img" alt="">
                                <div class="menu-content">
                                    <h5> {{ $menu->name }}</h5> 
                                    <span>${{ $menu->price }}</span>
                                </div>
                                <div class="menu-ingredients">
                                    {{ $menu->title }}
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            @endforeach
        </div>

    </div>
</section>
<section id="specials" class="specials" style="background-color: black">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Specials</h2>
            <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                    {{-- <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="tab" href="#tab-">{{ $menus->name }}</a>
                    </li> --}}
                    @foreach ($specialmuno as $menus)
                        <li class="nav-item">
                            <a class="nav-link " data-bs-toggle="tab"
                                href="#tab-{{ $menus->id }}">{{ $menus->name }}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                    @foreach ($specialmuno as $menus)
                        <div class="tab-pane " id="tab-{{ $menus->id }}">
                            <a href="{{ route('singel_menu', [$menus->category->slug, $menus->slug]) }}">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h2 style="color: white">{{ $menus->title }}</h2>
                                        {{-- <p class="fst-italic"></p> --}}
                                        <p>{{ $menus->dis }}</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img style="border-radius: 100%;width: 300px;height: 300px;" src="{{ Storage::url($menus->image) }}"
                                            alt="" class="img-fluid">
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</section><!-- End Specials Section -->




<div class="instagram-feed-area d-flex flex-wrap">
    @foreach ($gallery as $gallery)
        <!-- Single Instagram -->
        <div class="single-instagram">
            <img src="{{ Storage::url($gallery->image) }}" alt="" style="height: 280px">
            <!-- Image Zoom -->
            <a href="{{ Storage::url($gallery->image) }}" class="img-zoom" title="Instagram Image">+</a>
        </div>
    @endforeach


</div>

@endsection
@section('js')
<script src="{{ asset('user/menu/main.js') }}"></script>
<script src="{{ asset('user/menu/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('user/menu/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/menu/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('user/menu/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/menu/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('user/menu/vendor/swiper/swiper-bundle.min.js') }}"></script>
@endsection
