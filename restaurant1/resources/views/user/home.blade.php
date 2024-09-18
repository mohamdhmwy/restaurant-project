{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection --}}
<!DOCTYPE html>
@section('title')
    Home
@endsection
<html lang="en">

<head>
    @include('user.layout.css')
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" /> --}}
    
    <style>
        ul {
            list-style: none;
        }

        .example-2 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .example-2 .icon-content {
            margin: 0 10px;
            position: relative;
        }

        .example-2 .icon-content .tooltip {
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            color: #fff;
            padding: 6px 10px;
            border-radius: 5px;
            opacity: 0;
            visibility: hidden;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .example-2 .icon-content:hover .tooltip {
            opacity: 1;
            visibility: visible;
            top: -50px;
        }

        .example-2 .icon-content a {
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            color: #4d4d4d;
            background-color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .example-2 .icon-content a:hover {
            box-shadow: 3px 2px 45px 0px rgb(0 0 0 / 12%);
        }

        .example-2 .icon-content a svg {
            position: relative;
            z-index: 1;
            width: 30px;
            height: 30px;
        }

        .example-2 .icon-content a:hover {
            color: white;
        }

        .example-2 .icon-content a .filled {
            position: absolute;
            top: auto;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            background-color: #000;
            transition: all 0.3s ease-in-out;
        }

        .example-2 .icon-content a:hover .filled {
            height: 100%;
        }

        .example-2 .icon-content a[data-social="linkedin"] .filled,
        .example-2 .icon-content a[data-social="linkedin"]~.tooltip {
            background-color: #0274b3;
        }

        .example-2 .icon-content a[data-social="github"] .filled,
        .example-2 .icon-content a[data-social="github"]~.tooltip {
            background-color: #24262a;
        }

        .example-2 .icon-content a[data-social="instagram"] .filled,
        .example-2 .icon-content a[data-social="instagram"]~.tooltip {
            background: linear-gradient(45deg,
                    #405de6,
                    #5b51db,
                    #b33ab4,
                    #c135b4,
                    #e1306c,
                    #fd1f1f);
        }

        .example-2 .icon-content a[data-social="youtube"] .filled,
        .example-2 .icon-content a[data-social="youtube"]~.tooltip {
            background-color: #ff0000;
        }
    </style>


    <style>
        @import url("https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Playfair+Display:wght@500;600&family=Roboto:ital,wght@0,400;0,500;0,700;1,300;1,400&display=swap");



        /* .container {
            grid-template-columns: repeat(12, 1fr);
            display: grid;
            row-gap: 3rem;
        }

        @media (min-width: 55em) {
            .container {
                column-gap: 3rem;
            }
        } */

        /* img {
            display: block;
        } */

        /* ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #111;
            font-size: 1.1rem;
        } */

        footer ul li a,
        footer .copyright a,
        .feature-content a,
        .blog .card h3 a,
        main aside .box-content h3 a,
        main .slideshow-container .text a {
            text-transform: capitalize;
            display: inline-block;
            font-weight: 600;
        }

        /* footer ul li a:hover,
        footer .copyright a:hover,
        .feature-content a:hover,
        .blog .card h3 a:hover,
        main aside .box-content h3 a:hover,
        main .slideshow-container .text a:hover {
            text-decoration: underline;
        } */

        /* header {
            justify-items: center;
            margin-bottom: 1em;
            grid-column: 1/span 14;
        } */

        /* header .logo,
        header nav {
            text-align: center;
        }

        header .logo {
            margin-bottom: 2em;
        }

        header .logo a {
            font-size: 5rem;
            font-family: "Dancing Script", cursive;
            font-weight: 700;
        }

        header nav ul {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            padding: 0 0.5em;
        }

        header nav ul li a {
            text-transform: capitalize;
        }

        header nav ul li a:hover {
            color: green;
        } */

        .feature-img .img-container,
        .blog .card .img-container,
        main aside .box .img-container {
            overflow: hidden;
        }

        .feature-img .img-container:hover img,
        .blog .card .img-container:hover img,
        main aside .box .img-container:hover img {
            transform: rotate(2deg) scale(1.1);
        }

        main {
            padding-top: 1rem;
            padding-bottom: 3.25rem;
            border-bottom: 1px solid #ededed;
            grid-column: span 14;
            /* Slideshow container */
        }

        @media (min-width: 55em) {
            main {
                padding-top: 3.25rem;
                border-top: 1px solid #ededed;
            }
        }

        main .slideshow-container {
            grid-column: span 12;
            position: relative;

        }

        main .slideshow-container img {
            object-fit: cover;
            width: 100%;
            vertical-align: middle;
            height: inherit;
        }

        @media (min-width: 55em) {
            main .slideshow-container {
                grid-column: 2/span 7;
            }
        }

        main .slideshow-container .text {
            padding: 0.938rem 1.875rem;
            position: absolute;
            bottom: 0;
            left: 0%;
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            text-transform: capitalize;
            line-height: 1.6;
            box-shadow: 0.313rem 0.313rem 1rem #00000026;
            width: 100%;
        }

        @media (min-width: 55em) {
            main .slideshow-container .text {
                padding: 1.875rem 2.188rem;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: max-content;
                background: #fff;
                bottom: unset;
            }
        }

        main .slideshow-container .text a {
            font-size: 1rem;
            color: #fff;
            font-family: "Playfair Display", serif;
        }

        @media (min-width: 55em) {
            main .slideshow-container .text a {
                font-size: 1.8rem;
                color: #111;
            }
        }

        main .slideshow-container .text i {
            font-size: 0.9rem;
            display: block;
            color: #c6c6c6;
        }

        @media (min-width: 55em) {
            main .slideshow-container .text i {
                color: #6e6e6e;
            }
        }

        main .slideshow-container .fade {
            animation-name: fade;
            animation-duration: 100000s;
            height: 100%;
        }

        @keyframes fade {
            from {
                opacity: 0.9;
            }

            to {
                opacity: 1;
            }
        }

        main .slideshow-container .prev,
        main .slideshow-container .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 1em;
            margin-top: -1.375em;
            color: #fff;
            font-weight: bold;
            font-size: 1.125rem;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            /* On hover, add a black background color with a little bit see-through */
        }

        @media (min-width: 55em) {

            main .slideshow-container .prev,
            main .slideshow-container .next {
                background-color: rgba(0, 0, 0, 0.6);
            }
        }

        main .slideshow-container .prev:hover,
        main .slideshow-container .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        main .slideshow-container .next {
            right: 0;
            border-radius: 0.188rem 0 0 0.188rem;
        }

        @media only screen and (max-width: 18.75rem) {

            main .slideshow-container .prev,
            main .slideshow-container .next,
            main .slideshow-container .text {
                font-size: 0.688rem;
            }
        }

        main aside {
            grid-column: span 12;
            display: grid;
            gap: 1.5rem;
            padding-inline: 1.5em;
            grid-template-columns: repeat(12, 1fr);
        }

        @media (min-width: 55em) {
            main aside {
                grid-column: span 3;
                padding-inline: 0;
                grid-template-columns: 1fr;
            }
        }

        main aside .box {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            grid-column: span 12;
        }

        @media (min-width: 45em) {
            main aside .box {
                grid-column: span 6;
            }
        }

        @media (min-width: 55em) {
            main aside .box {
                grid-column: span 1;
            }
        }

        main aside .box img {
            width: clamp(100%, 10vw, 9.375rem);
            height: 100%;
            object-fit: cover;
            transition: 0.2s ease-in-out;
        }

        @media (min-width: 55em) {
            main aside .box img {
                width: clamp(3.125rem, 10vw, 20rem);
            }
        }

        main aside .box .img-container {
            aspect-ratio: 1/1;
        }

        main aside .box-content {
            grid-column: span 3;
        }

        main aside .box-content i,
        main aside .box-content h3 {
            text-transform: capitalize;
        }

        main aside .box-content h3 a {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.4;
        }

        main aside .box-content i {
            color: #6e6e6e;
            font-size: 0.9rem;
            display: block;
            margin-bottom: 0.7em;
        }

        /* section {
            padding-block: 3.25rem;
            border-bottom: 1px solid #ededed;
            grid-column: span 14;
            display: grid;
            grid-template-columns: repeat(12, 1fr);
        } */

        /* .feature-content i,
        .blog .card i {
            color: #6e6e6e;
            font-size: 0.9rem;
        }

        .feature-content i span,
        .blog .card i span {
            display: block;
            width: 0.2rem;
            height: 0.2rem;
            background: #6e6e6e;
            border-radius: 50%;
            margin-inline: 0.313em;
        }

        .blog .container {
            grid-template-columns: repeat(auto-fit, minmax(min(12rem, 100%), 1fr));
            grid-column: 2/span 10;
            gap: 2rem;
        }

        .blog .card {
            display: grid;
            grid-template-columns: 1fr;
            row-gap: 1.125rem;
        }

        @media (min-width: 75em) {
            .blog .card {
                grid-template-columns: repeat(3, 1fr);
                gap: 1.125rem;
            }
        }

        .blog .card div {
            grid-column: span 2;
        }

        .blog .card .img-container img {
            width: 100%;
            aspect-ratio: 1/1;
            grid-column: span 2;
            transition: 0.2s ease-in-out;
            object-fit: cover;
        }

        @media (min-width: 55em) {
            .blog .card .img-container img {
                aspect-ratio: 3/2;
                grid-column: unset;
            }
        }

        .blog .card i {
            display: inline-flex;
            align-items: center;
        }

        .blog .card i:nth-of-type(1) {
            text-transform: capitalize;
        }

        .blog .card h3 {
            text-transform: capitalize;
            margin-block: 0.5rem;
        }

        .blog h2 {
            grid-column: 2/span 10;
            margin-bottom: 1.2em;
        }

        .feature {
            row-gap: 3rem;
        } */

        /* .feature>div {
            grid-column: span 12;
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            row-gap: 2rem;
        }

        @media (min-width: 75em) {
            .feature>div {
                column-gap: 2rem;
            }
        }

        .feature h2 {
            grid-column: 2/span 8;
            text-transform: capitalize;
            margin-bottom: -1.25em;
        }

        @media (min-width: 75em) {
            .feature h2 {
                grid-column: 3/span 8;
            }
        }

        .feature-img {
            grid-column: span 12;
        }

        @media (min-width: 45em) {
            .feature-img {
                grid-column: 2/span 8;
            }
        }

        @media (min-width: 75em) {
            .feature-img {
                grid-column: 3/8;
            }
        }

        .feature-img img {
            width: 100%;
            transition: 0.2s ease-in-out;
        }

        .feature-content {
            grid-column: 2/-2;
        }

        @media (min-width: 75em) {
            .feature-content {
                grid-column: 8/-3;
            }
        }

        .feature-content i {
            display: inline-flex;
            text-transform: capitalize;
            align-items: center;
            flex-wrap: wrap;
        }

        .feature-content a {
            margin-top: 0.625em;
            margin-bottom: 1.875em;
            font-size: 1.3rem;
            display: block;
        }

        .feature-content p {
            line-height: 1.6;
            margin-bottom: 0.5em;
        }

        .feature-content .btn-more {
            display: block;
            font-size: 1rem;
            margin-top: 1.5em;
            margin-bottom: 0;
        }

        .quote {
            background: #f3f3f3;
            place-content: center;
            min-height: 16.25rem;
            text-align: center;
        }

        .quote span {
            display: block;
            grid-column: span 14;
            font-weight: 500;
        }

        .quote hr {
            grid-column: span 12;
            display: block;
            height: 0.125em;
            background: #111;
            width: 1.875rem;
            border: none;
            margin: 0.75rem auto 1.25rem auto;
            font-weight: 400;
        }

        .quote h1 {
            font-size: 1.6rem;
            grid-column: 2/span 10;
            line-height: 1.4;
            font-family: "Playfair Display", serif;
        }

        @media (min-width: 55em) {
            .quote h1 {
                grid-column: 5/span 4;
                font-size: 2rem;
            }
        }

        .quote i {
            grid-column: span 14;
            text-transform: capitalize;
            margin-top: 1.125em;
        } */

        /* footer {
            grid-column: span 14;
            padding: 2rem 0;
        }

        footer .container {
            row-gap: 1rem;
        }

        footer .copyright {
            grid-column: 2/span 10;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        @media (min-width: 45em) {
            footer .copyright {
                grid-column: 2/7;
            }
        }

        footer ul {
            grid-column: 2/span 10;
        }

        @media (min-width: 45em) {
            footer ul {
                grid-column: span 5;
            }
        }

        footer ul li {
            display: flex;
            justify-content: flex-start;
            gap: 1em;
        }

        @media (min-width: 45em) {
            footer ul li {
                justify-content: flex-end;
            }
        }

        footer ul li a {
            text-transform: uppercase;
            font-weight: 400;
            font-size: 0.9rem;
        } */
    </style>
</head>

<body>

    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-content">
            <h3>Cooking in progress..</h3>
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    @include('user.layout.navbar')
    <!-- ##### Header Area End ##### -->
    <!-- ##### Treading Post Area Start ##### -->
    @include('user.pages.trend_post')
    <!-- ##### Treading Post Area End ##### -->

    <!-- ##### special Start ##### -->
    @include('user.pages.special')
    <!-- ##### special End ##### -->

    <!-- ##### Catagory Area Start ##### -->
    @include('user.pages.category')
    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Big Posts Area Start ##### -->
    @include('user.pages.event')
    <!-- ##### Big Posts Area End ##### -->

    <!-- ##### Posts Area End ##### -->
    @include('user.pages.post')
    <!-- ##### Posts Area End ##### -->

    <!-- ##### Instagram Area Start ##### -->

    @include('user.pages.gallery')
    <!-- ##### Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('user.layout.footer')
    <!-- ##### Footer Area Start ##### -->

    @include('user.layout.js')
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides((slideIndex = n));
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }

        /*inspiration from
        https://www.elmastudio.de/en/themes/weta/
        https://i.pinimg.com/564x/5c/dd/45/5cdd455358e56f0e674d34f08344615e.jpg
        */
    </script>
</body>

</html>
