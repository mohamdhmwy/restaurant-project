@extends('user.master')

@section('css')

@section('title')
Blog
@endsection
@endsection
@section('body')
<div class="bueno-post-area mb-70" style="margin-top: 50px">
    {{-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s" style="margin-bottom: 30px">
        <h2 class="block-title text-center">
            Our Blog
        </h2>
        <p class="title-caption text-center"> All Blog For our Restaurant</p>
    </div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Area -->
            <div class="col-12 col-lg-8 col-xl-9">
                <!-- Single Blog Post -->

                @foreach ($blog as $blog)
                    <div class="single-blog-post style-1 d-flex flex-wrap mb-30">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="{{ Storage::url($blog->image) }}" alt="">
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            {{-- <a href="#" class="post-tag">The Best</a> --}}
                            <a href="#" class="post-title">{{ $blog->name }}</a>
                            <div class="post-meta">
                                <a href="#" class="post-date">{{ $blog->created_at->format('M d, Y') }}</a>
                                <a href="#" class="post-author">By Julia Stiles</a>
                            </div>
                            <p>{{ $blog->dis }}</p>
                        </div>
                    </div>
                @endforeach


            </div>

            <!-- Sidebar Area -->

            <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xl-3">
                <div class="sidebar-area">

                    <!-- Single Widget Area -->
                    <div class="single-widget-area add-widget mb-30">
                        <img src="{{ asset('user/assets/img/bg-img/add.png') }}" alt="">
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area post-widget">
                        @foreach ($sidbarblog as $sidbarblog)
                            <!-- Single Post Area -->
                            <div class="single-post-area d-flex">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <img src="{{ Storage::url($sidbarblog->image) }}" alt="">
                                </div>
                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <a href="#" class="post-title"> {{ $sidbarblog->name }}</a>
                                    <div class="post-meta">
                                        <a href="#"
                                            class="post-date">{{ $sidbarblog->created_at->format('M d, Y') }}</a>
                                        <a href="#" class="post-author">By Julia Stiles</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





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
@endsection
@section('js')

@endsection

