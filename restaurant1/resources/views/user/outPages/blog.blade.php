@extends('user.master')
@section('css')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Figtree:800|Azeret+Mono:400");

        :root {
            --lightblk: #252930;
            --blk: #111417;
            --blue: #bde0fe;
            --red: #f08080;
            --bg: #ffffff;
            --green: #60f79d;
        }

        h3 {
            font-family: "Figtree";
            font-weight: 700;
            margin: 0;
            font-size: 2.3rem;
            color: white;
        }

        body {
            align-items: center;
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            display: flex;
            margin: 0;
        }

        body {
            margin: 0;
            overflow-y: clip;
        }

        /*Carousel*/
        .carousel {
            overflow-y: clip;
            overflow-x: scroll;
            padding: 1em;
            margin: auto;
            gap: 20px;
            display: flex;
            flex-direction: row;
        }

        .container {
            cursor: pointer;
            transition: 0.5s;
            display: flex;
            position: relative;
        }

        .img {
            min-height: 35rem;
            max-height: 35rem;
            object-fit: contain;
            height: auto;
            width: auto;
            position: relative;
            border-radius: 10px;
        }

        .overlay {
            transition: 0.5s;
            border-radius: 10px;
            height: 100%;
            width: 100%;
            position: absolute;
            text-align: left;
            padding: 1em;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .container:hover {
            z-index: 1;
            transform: scale(1.02);
            /*  box-shadow: -20px 20px 50px 1px black; */
        }

        .btn {
            fill: white;
            display: flex;
            gap: 0.5rem;
            bottom: 0;
        }

        .user {
            fill: white;
            height: 35px;
            width: 35px;
            padding-right: 0.2em;
        }

        .right {
            margin-right: auto;
        }

        .left {
            margin-left: auto;
        }

        .heart_enabled {}
    </style>
@endsection
@section('body')
    <div class="carousel">
        <div class="container left">
            <img class="img"
                src="https://images.unsplash.com/photo-1530625625693-b38b404cb1be?auto=format&fit=crop&q=60&w=400&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fG91dHNpZGV8ZW58MHx8MHx8fDA%3D">
            <div class="overlay">
                <h3>A little blurb about this.</h3>
                <div class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                    </svg><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z" />
                    </svg><svg class="heart" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <path
                            d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                    </svg></div>
            </div>
        </div>
        <div class="container">
            <img class="img"
                src="https://images.unsplash.com/photo-1533579263828-9f24d05acd87?auto=format&fit=crop&q=80&w=1374&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <div class="overlay">
                <h3>And this too.</h3>
                <div class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                    </svg><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z" />
                    </svg><svg class="heart" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <path
                            d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                    </svg></div>
            </div>
        </div>
        <div class="container right">
            <img class="img"
                src="https://images.unsplash.com/photo-1694046304556-6bbc38d42fc3?auto=format&fit=crop&q=80&w=1374&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
            <div class="overlay">
                <h3>And maybe this as well.</h3>
                <div class="btn"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                    </svg><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M307 34.8c-11.5 5.1-19 16.6-19 29.2v64H176C78.8 128 0 206.8 0 304C0 417.3 81.5 467.9 100.2 478.1c2.5 1.4 5.3 1.9 8.1 1.9c10.9 0 19.7-8.9 19.7-19.7c0-7.5-4.3-14.4-9.8-19.5C108.8 431.9 96 414.4 96 384c0-53 43-96 96-96h96v64c0 12.6 7.4 24.1 19 29.2s25 3 34.4-5.4l160-144c6.7-6.1 10.6-14.7 10.6-23.8s-3.8-17.7-10.6-23.8l-160-144c-9.4-8.5-22.9-10.6-34.4-5.4z" />
                    </svg><svg class="heart" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <path
                            d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                    </svg></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('user/menu/style.css') }}" rel="stylesheet">
</head>

<body>
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Events</h2>
                <p>Organize Your Events in our Restaurant</p>
            </div>

            <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>Birthday Parties</h3>
                                <div class="price">
                                    <p><span>$189</span></p>
                                </div>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>Private Parties</h3>
                                <div class="price">
                                    <p><span>$290</span></p>
                                </div>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="row event-item">
                            <div class="col-lg-6">
                                <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0 content">
                                <h3>Custom Parties</h3>
                                <div class="price">
                                    <p><span>$99</span></p>
                                </div>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat.</li>
                                    <li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in
                                        voluptate velit.</li>
                                    <li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea
                                        commodo
                                        consequat.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Events Section -->
    <script src="{{ asset('user/menu/main.js') }}"></script>
    <script src="{{ asset('user/menu/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('user/menu/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/menu/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('user/menu/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/menu/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('user/menu/vendor/swiper/swiper-bundle.min.js') }}"></script>

</body>

</html> --}}


<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motion Carousel by javascript</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins";

        }

        html {
            font-size: 16px;
        }

        @font-face {
            font-family: "Poppins";
            src: url(font/Poppins-Black.ttf);
            font-weight: 900;
        }

        @font-face {
            font-family: "Poppins";
            src: url(font/Poppins-Bold.ttf);
            font-weight: 500;
        }

        @font-face {
            font-family: "Poppins";
            src: url(font/Poppins-Light.ttf);
            font-weight: 300;
        }

        body {
            min-height: 100vh;
            /* background-color: #000; */
            padding: 25px;
            overflow-x: hidden !important;
        }

        .slider-main {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(50%);
            border-radius: 25px;
            max-width: 960px;
            min-height: 550px;
            background-color: #232526;


        }

        .slider .slider-item {
            transition: all 1s;
            width: 180px;
            height: 300px;
            border-radius: 15px;
            background-color: #414345;
            position: absolute;
            top: 50%;
            right: 0;
            font-size: 55px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateX(-50%) translateY(-50%);
        }

        .slider .slider-item img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 15px;
        }

        .slider-main .slider-btn-group {
            width: 100%;
            position: absolute;
            bottom: 0;
            padding: 25px 0 0 0;
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        .slider-main .slider-btn-group button {
            background-color: #414345;
            border-radius: 100px 100px 0 0;
            width: 250px;
            height: 45px;

            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
            color: #f1f1f1;
            cursor: pointer;
            font-weight: bold;
            z-index: 1;
        }

        .slider-item.activeBgc {
            right: 0%;
            top: 0%;
            transform: translateX(0%) translateY(0%);
            background-color: #232526;
            z-index: -1;
            width: 100%;
            height: 100%;
            border-radius: 25px;
            filter: brightness(80%);
        }

        .slider-item.activeBgc img {
            border-radius: 25px;
        }

        .slider-item.activeSmall {
            width: 200px;
            height: 180px;
            transition: all 0.5s;
        }

        .slider-main .slide-content {
            transition: all 0.5s;
            min-height: 250px;
            position: absolute;
            top: 50%;
            left: 0;
            padding: 25px;
            transform: translateX(0) translateY(-50%);
            max-width: 400px;
        }

        .slider-main .slide-content h2 {
            color: #f1f1f1;
            text-transform: capitalize;
            font-size: 2rem;
            margin-bottom: 1rem;
            font-weight: 900;
        }

        .slider-main .slide-content p {
            color: #f1f1f1;
            text-transform: capitalize;
            font-size: 0.9rem;
            margin-bottom: 2rem;
            font-weight: 500;
        }

        .slider-main .slide-content a {
            background-color: #414345;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            color: #f1f1f1;
            text-decoration: none;
            border-radius: 5px;
            padding: 8px 15px;
            font-weight: 300;
            text-transform: capitalize;
        }

        .slider-main .slider-content {
            display: none;
        }

        @media screen and (max-width: 1320px) {
            html {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 1140px) {
            html {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 960px) {
            html {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 768px) {
            html {
                font-size: 10px;
            }
        }

        @media screen and (max-width: 576px) {
            html {
                font-size: 10px;
            }

            body {
                overflow-x: hidden;
            }

            .slider .slider-item {
                width: 190px;
                height: 150px;
                transform: translateX(-50%) translateY(30%);
            }

            .slider-item.activeBgc {
                width: 100%;
                height: 100%;
                transform: translateX(0%) translateY(0%);
            }

            .slider-main .slide-content {
                max-width: 250px;
                position: absolute;
                top: 25%;
                left: 0;
                padding: 25px;


            }
        }
    </style>
</head>

<body>

    <div class="slider-main">
        <div class="slider">
            <div class="slider-item activeBgc">
                <img src="{{ asset('user/assets/img/bg-img/1.jpg') }}" alt="" />
                <div class="slider-content">
                    <div class="slider-header">
                        <h2>iphone 15 pro max</h2>
                    </div>
                    <div class="slider-paragraph">
                        <p>Enter A17 Pro Game‑changing chip Groundbreaking performance</p>
                    </div>
                    <a href="https://www.apple.com/iphone-15-pro/" class="btn-see-more">add to cart</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="https://sepehrhariri.github.io/codepen/1.png" alt="" />
                <div class="slider-content">
                    <div class="slider-header">
                        <h2>AirPods Pro</h2>
                    </div>
                    <div class="slider-paragraph">
                        <p>
                            The Apple-designed H2 chip is the force behind the advanced
                            audio performance of AirPods Pro
                        </p>
                    </div>
                    <a href="https://www.apple.com/airpods-pro/" class="btn-see-more">add to cart</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="https://sepehrhariri.github.io/codepen/2.png" alt="" />
                <div class="slider-content">
                    <div class="slider-header">
                        <h2>xbox series x</h2>
                    </div>
                    <div class="slider-paragraph">
                        <p>THE FASTEST, MOST POWERFUL XBOX EVER</p>
                    </div>
                    <a href="https://www.xbox.com/en-US/consoles/xbox-series-x" class="btn-see-more">add to cart</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="https://sepehrhariri.github.io/codepen/3.png" alt="" />
                <div class="slider-content">
                    <div class="slider-header">
                        <h2>playstation 5 pro</h2>
                    </div>
                    <div class="slider-paragraph">
                        <p>
                            Playing PS VR games on a PS5™ console requires a PS VR headset,
                            PlayStation®Camera
                        </p>
                    </div>
                    <a href="https://www.playstation.com/en-us/ps5/?smcid=pdc%3Aen-us%3Alegal-language-support%3Aprimary%20nav%3Amsg-ps5%3Aconsole"
                        class="btn-see-more">add to cart</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="https://sepehrhariri.github.io/codepen/4.png" alt="" />
                <div class="slider-content">
                    <div class="slider-header">
                        <h2>alpha 7r v</h2>
                    </div>
                    <div class="slider-paragraph">
                        <p>
                            α7R V full-frame high-resolution camera / Included components
                            may vary by country or region of purchase: BC-QZ1
                        </p>
                    </div>
                    <a href="https://www.sony.com/electronics/support/e-mount-body-ilce-7-series/ilce-7rm5"
                        class="btn-see-more">add to cart</a>
                </div>
            </div>
            <div class="slider-item">
                <img src="https://sepehrhariri.github.io/codepen/5.webp" alt="" />
                <div class="slider-content">
                    <div class="slider-header">
                        <h2>imac</h2>
                    </div>
                    <div class="slider-paragraph">
                        <p>Packed with more juice</p>
                    </div>
                    <a href="https://www.apple.com/imac/" class="btn-see-more">add to cart</a>
                </div>
            </div>
        </div>
        <div class="slider-btn-group">
            <button id="pre-btn-slider">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </button>
        </div>
        <div class="slide-content">
            <h2></h2>
            <p></p>
            <a href="" target="_blank"></a>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        let $ = document;
        let slider = $.querySelector(".slider");
        let sliderItem = $.querySelectorAll(".slider-item");

        let preBtnSlider = $.getElementById("pre-btn-slider");
        let nextBtnSlider = $.getElementById("next-btn-slider");
        let bgSlider = $.querySelector(".bg-slider");
        let slideContentH2 = $.querySelector(".slide-content h2");
        let slideContentP = $.querySelector(".slide-content p");
        let slideContentAnchor = $.querySelector(".slide-content a");
        sliderItem = Array.from(sliderItem);
        let currentPosition = 200;
        let firstItemCurentPosition = currentPosition;
        let nextItemForActive = 0;
        let autoPreMoveSlide;
        for (let item = 0; item < sliderItem.length; item++) {
            sliderItem[item].style.right = `${
        currentPosition - firstItemCurentPosition
        }px`;
            firstItemCurentPosition = firstItemCurentPosition - firstItemCurentPosition;
            currentPosition = currentPosition - 225;
        }
        lastItemPosition = currentPosition + 225;
        console.log(
            getComputedStyle(sliderItem[sliderItem.length - 1]).getPropertyValue("right")
        );
        let currentPositionItem = 0;
        let defualtWidth = sliderItem[1].offsetWidth;
        let defualtHeight = sliderItem[1].offsetHeight;
        $.addEventListener("DOMContentLoaded", () => {
            preBtnSlider.addEventListener("click", preMoveSlid);
        });
        slideContentH2.innerHTML =
            sliderItem[0].lastElementChild.firstElementChild.firstElementChild.textContent;
        slideContentP.innerHTML =
            sliderItem[0].lastElementChild.lastElementChild.previousElementSibling.firstElementChild.textContent;
        slideContentAnchor.innerHTML =
            sliderItem[0].lastElementChild.lastElementChild.textContent;
        slideContentAnchor.setAttribute(
            "href",
            sliderItem[0].lastElementChild.lastElementChild.getAttribute("href")
        );

        function preMoveSlid() {
            preBtnSlider.setAttribute("disabled", " ");
            for (let i = 0; i < sliderItem.length; i++) {
                currentPositionItem = getComputedStyle(sliderItem[i]).getPropertyValue(
                    "right"
                );

                if (
                    sliderItem[i].classList.contains("activeBgc") ||
                    parseFloat(getComputedStyle(sliderItem[i]).getPropertyValue("right")) >=
                    parseFloat("200px")
                ) {
                    sliderItem[i].classList.remove("activeBgc");

                    console.log(sliderItem[i].nextElementSibling);
                    if (
                        sliderItem[i].nextElementSibling == null ||
                        sliderItem[i].nextElementSibling.classList.contains("slider-item") !=
                        true
                    ) {
                        nextItemForActive = sliderItem[0];
                    } else {
                        nextItemForActive = sliderItem[i].nextElementSibling;
                    }
                    sliderItem[i].style.right = `${lastItemPosition}px`;
                } else {
                    sliderItem[i].style.right = `${parseInt(currentPositionItem) + 225}px`;
                }
            }

            nextItemForActive.style.transition = "all 0.5s";
            nextItemForActive.classList.add("activeBgc");
            slideContentH2.innerHTML =
                nextItemForActive.lastElementChild.firstElementChild.firstElementChild.textContent;
            slideContentP.innerHTML =
                nextItemForActive.lastElementChild.lastElementChild.previousElementSibling.firstElementChild.textContent;
            slideContentAnchor.innerHTML =
                nextItemForActive.lastElementChild.lastElementChild.textContent;
            slideContentAnchor.setAttribute(
                "href",
                nextItemForActive.lastElementChild.lastElementChild.getAttribute("href")
            );
            nextItemForActive.style.right = "0";
            setTimeout(() => {
                preBtnSlider.removeAttribute("disabled");
            }, 600);
        }

        function autoPlaySlider() {
            for (let w = 0; w < sliderItem.length; w++) {
                if (
                    parseFloat(getComputedStyle(sliderItem[w]).getPropertyValue("right")) <
                    -450
                ) {
                    sliderItem[w].style.opacity = "0";
                } else if (
                    parseFloat(getComputedStyle(sliderItem[w]).getPropertyValue("right")) >
                    -450
                ) {
                    sliderItem[w].style.opacity = "10";
                }
            }
            for (let w = 0; w < sliderItem.length; w++) {
                if (
                    parseFloat(getComputedStyle(sliderItem[w]).getPropertyValue("right")) <=
                    -250
                ) {
                    sliderItem[w].classList.add("activeSmall");
                } else if (
                    parseFloat(getComputedStyle(sliderItem[w]).getPropertyValue("right")) >
                    -250
                ) {
                    sliderItem[w].classList.remove("activeSmall");
                }
            }
        }

        setInterval(autoPlaySlider, 1);
    </script>
</body>

</html>
