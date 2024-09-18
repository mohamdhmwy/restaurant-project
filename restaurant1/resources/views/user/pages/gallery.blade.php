

<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
    <h2 class="block-title text-center">
        Our Gallery
    </h2>
    <p class="title-caption text-center">There are many beautiful places in our gallery
    </p>
</div>
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


{{-- <div class="instagram-feed-area d-flex flex-wrap">
    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="{{ asset('user/assets/img/bg-img/insta1.jpg') }}" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta1.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta2.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta2.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta3.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta3.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta4.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta4.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta5.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta5.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta6.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta6.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta7.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta7.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta8.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta8.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta9.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta9.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>

    <!-- Single Instagram -->
    <div class="single-instagram">
        <img src="img/bg-img/insta10.jpg" alt="">
        <!-- Image Zoom -->
        <a href="img/bg-img/insta10.jpg" class="img-zoom" title="Instagram Image">+</a>
    </div>
</div> --}}
