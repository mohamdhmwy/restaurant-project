{{-- <div class="special-menu pad-top-100 parallax">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title color-white text-center"> Today's Special </h2>
                    <h5 class="title-caption text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia,nostrud
                        exercitation ullamco. </h5>
                </div>
                <div class="special-box">
                    <div id="owl-demo">
                        @foreach ($specialmuno as $special)
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            {{ $special->name }}
                                            <div class="line"></div>
                                            <div class="dit-line">{{ $special->title }}</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="{{ Storage::url($special->image) }}" alt="sp-menu">
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- end special-box -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div> --}}

<div class="hero-area">
    <!-- Hero Post Slides -->
    <div class="hero-post-slides owl-carousel" style="height: 420px">
        <!-- Single Slide -->
        @foreach ($specialmuno as $specialmuno)
            <div class="single-slide">
                <a href="{{ route('singel_menu', [$specialmuno->category->slug, $specialmuno->slug]) }}">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                        <img src="{{ Storage::url($specialmuno->image) }}" alt="" style="height: 400px">
                    </div>


                    <!-- Blog Content -->
                    <div class="blog-content-bg" style="height:220px ">
                        <div class="blog-content">
                            <a href="{{ route('singel_menu', [$specialmuno->category->slug, $specialmuno->slug]) }}" class="post-tag">Special Menu</a>
                            <a href="{{ route('singel_menu', [$specialmuno->category->slug, $specialmuno->slug]) }}" class="post-title">{{ $specialmuno->name }}</a>
                            <div class="post-meta">
                                <a href="{{ route('singel_menu', [$specialmuno->category->slug, $specialmuno->slug]) }}" class="post-date">{{ $specialmuno->created_at->format('M d,Y') }}</a>
                                <a href="{{ route('singel_menu', [$specialmuno->category->slug, $specialmuno->slug]) }}" class="post-author">Bestseller</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</div>
<section id="specials" class="specials" style="background-color: black;margin-top: 50px">

    <div class="big-posts-area mb-50" style="background-color: black;height: 600px">
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
                        <img src="{{ asset('user/assets/img/bg-img/insta2.jpg') }}" style="height: 600px;width: ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
