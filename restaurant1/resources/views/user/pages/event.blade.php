{{-- <div class="big-posts-area mb-50">
    <div class="container">
        <!-- Single Big Post Area -->
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="big-post-thumbnail mb-50">
                    <img src="{{ asset('user/assets/img/bg-img/7.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="big-post-content text-center mb-50">
                    <a href="#" class="post-tag">Healthy</a>
                    <a href="#" class="post-title">Friend eggs with ham</a>
                    <div class="post-meta">
                        <a href="#" class="post-date">July 11, 2018</a>
                        <a href="#" class="post-author">By Julia Stiles</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus, egestas tincidunt augue pellentesque. Suspendisse vestibulum sem in eros maximus, pretium commodo turpis convallis. Aenean scelerisque orci quis urna tempus, vitae interdum velit aliquet.</p>
                    <a href="#" class="btn bueno-btn">Read More</a>
                </div>
            </div>
        </div>

        <!-- Single Big Post Area -->
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="big-post-content text-center mb-50">
                    <a href="#" class="post-tag">The Best</a>
                    <a href="#" class="post-title">Steak with boiled vegetables</a>
                    <div class="post-meta">
                        <a href="#" class="post-date">July 11, 2018</a>
                        <a href="#" class="post-author">By Julia Stiles</a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus, egestas tincidunt augue pellentesque. Suspendisse vestibulum sem in eros maximus, pretium commodo turpis convallis. Aenean scelerisque orci quis urna tempus, vitae interdum velit aliquet.</p>
                    <a href="#" class="btn bueno-btn">Read More</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="big-post-thumbnail mb-50">
                    <img src="{{ asset('user/assets/img/bg-img/8.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="hero-area">
    <!-- Hero Post Slides -->
    <div class="hero-post-slides owl-carousel">
        <!-- Single Slide -->
        @foreach ($specialmuno as $specialmuno)
            <div class="single-slide">



                <!-- Blog Thumbnail -->
                <div class="blog-thumbnail">
                    <a href="#"><img src="{{ Storage::url($specialmuno->image) }}" alt=""></a>
                </div>

                <!-- Blog Content -->
                <div class="blog-content-bg">
                    <div class="blog-content">
                        <a href="#" class="post-tag">{{ $specialmuno->category->name }}</a>
                        <a href="#" class="post-title">{{ $specialmuno->name }}</a>
                        <div class="post-meta">
                            <a href="#" class="post-date">{{ $specialmuno->created_at->format('M d,Y') }}</a>
                            <a href="#" class="post-author">By Julia Stiles</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div> --}}



{{-- <section>
    <div class="container">
        <div class="carousel">
            <input type="radio" name="slides" checked="checked" id="slide-1">
            <input type="radio" name="slides" id="slide-2">
            <input type="radio" name="slides" id="slide-3">
            <input type="radio" name="slides" id="slide-4">
            <input type="radio" name="slides" id="slide-5">
            <input type="radio" name="slides" id="slide-6">
            <ul class="carousel__slides">
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://picsum.photos/id/1041/800/450" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            <span class="credit">Photo: Tim Marshall</span>
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://picsum.photos/id/1043/800/450" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            <span class="credit">Photo: Christian Joudrey</span>
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://picsum.photos/id/1044/800/450" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            <span class="credit">Photo: Steve Carter</span>
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://picsum.photos/id/1045/800/450" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            <span class="credit">Photo: Aleksandra Boguslawska</span>
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://picsum.photos/id/1049/800/450" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            <span class="credit">Photo: Rosan Harmens</span>
                        </figcaption>
                    </figure>
                </li>
                <li class="carousel__slide">
                    <figure>
                        <div>
                            <img src="https://picsum.photos/id/1052/800/450" alt="">
                        </div>
                        <figcaption>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            <span class="credit">Photo: Annie Spratt</span>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <ul class="carousel__thumbnails">
                <li>
                    <label for="slide-1"><img src="https://picsum.photos/id/1041/150/150" alt=""></label>
                </li>
                <li>
                    <label for="slide-2"><img src="https://picsum.photos/id/1043/150/150" alt=""></label>
                </li>
                <li>
                    <label for="slide-3"><img src="https://picsum.photos/id/1044/150/150" alt=""></label>
                </li>
                <li>
                    <label for="slide-4"><img src="https://picsum.photos/id/1045/150/150" alt=""></label>
                </li>
                <li>
                    <label for="slide-5"><img src="https://picsum.photos/id/1049/150/150" alt=""></label>
                </li>
                <li>
                    <label for="slide-6"><img src="https://picsum.photos/id/1052/150/150" alt=""></label>
                </li>
            </ul>
        </div>
    </div>
</section> --}}


{{-- <div class="wrapper">
    <input checked type=radio name="slider" id="slide1" />
    <input type=radio name="slider" id="slide2" />
    <input type=radio name="slider" id="slide3" />
    <input type=radio name="slider" id="slide4" />
    <input type=radio name="slider" id="slide5" />

    <div class="slider-wrapper">
        <div class=inner>
            <article>
                <div class="info top-left">
                    <h4 style="color: white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit bibendum pharetra non vitae
                        lectus. Mauris libero felis, dapibus a ultrices sed, commodo vitae odio. Sed auctor tellus quis arcu tempus, egestas
                        tincidunt augue pellentesque. Suspendisse vestibulum sem in eros maximus, pretium commodo turpis convallis. Aenean
                        scelerisque orci quis urna tempus, vitae interdum velit aliquet.</h4>
                </div>
                <img src="https://farm9.staticflickr.com/8059/28286750501_dcc27b1332_h_d.jpg" />
            </article>

            <article>
                <div class="info bottom-right">
                    <h3>Cameron Highland</h3>
                </div>
                <img src="https://farm6.staticflickr.com/5812/23394215774_b76cd33a87_h_d.jpg" />
            </article>

            <article>
                <div class="info bottom-left">
                    <h3>New Delhi</h3>
                </div>
                <img src="https://farm8.staticflickr.com/7455/27879053992_ef3f41c4a0_h_d.jpg" />
            </article>

            <article>
                <div class="info top-right">
                    <h3>Ladakh</h3>
                </div>
                <img src="https://farm8.staticflickr.com/7367/27980898905_72d106e501_h_d.jpg" />
            </article>

            <article>
                <div class="info bottom-left">
                    <h3>Nubra Valley</h3>
                </div>
                <img src="https://farm8.staticflickr.com/7356/27980899895_9b6c394fec_h_d.jpg" />
            </article>
        </div>
        <!-- .inner -->
    </div>
    <!-- .slider-wrapper -->

    <div class="slider-prev-next-control">
        <label for=slide1></label>
        <label for=slide2></label>
        <label for=slide3></label>
        <label for=slide4></label>
        <label for=slide5></label>
    </div>
    <!-- .slider-prev-next-control -->

    <div class="slider-dot-control">
        <label for=slide1></label>
        <label for=slide2></label>
        <label for=slide3></label>
        <label for=slide4></label>
        <label for=slide5></label>
    </div>
    <!-- .slider-dot-control -->
</div> --}}


<main style="margin-bottom: 70px">
    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
        <h2 class="block-title text-center">
            Our Events
        </h2>
        <p class="title-caption text-center">Organize Your Events in our Restaurant</p>
    </div>
    <div class="container" style="overflow: auto;white-space: nowrap;text-overflow: ellipsis">
        <div class="slideshow-container">
            @foreach ($event as $event)
                <div class="mySlides fade" style="height: 600px">
                    <img src="{{Storage::url($event->image ) }}">
                    <div class="text">
                        <a href="#" > {{ $event->name }}<br> </a>
                        <h5 style="color: #b0c364"></h5>
                        <a class="btn" href="{{ route('show_event_details',$event->name) }}" style="text-decoration: underline;color: #b0c364">Show Details</a>

                    </div>
                </div>
            @endforeach


            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>

    </div>
</main>
