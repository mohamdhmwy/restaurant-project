@extends('user.master')
@section('css')
    {{-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

        /* * {
                                                padding: 0;
                                                margin: 0
                                            } */

        .container {
            /* min-height: 100vh; */
            /* display: flex; */
            justify-content: center;
            align-items: center;
            /* background-color: #eee */
        }

        .container .card {
            height: 500px;
            width: 800px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            padding: 10px;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
            cursor: pointer
        }

        .container .card .form {
            width: 100%;
            height: 100%;
            display: flex
        }

        .container .card .left-side {
            width: 45%;
            background-color: #3e2093;
            height: 100%;
            border-radius: 10px;
            position: relative;
            overflow: hidden
        }

        .left-side .top {
            color: #fff;
            padding: 30px
        }

        .top h4 {
            font-size: 19px;
            margin-bottom: 10px
        }

        .top p {
            color: #ded9ec;
            font-size: 14px
        }

        .medium {
            display: flex;
            align-items: start;
            flex-direction: column;
            padding: 0 30px;
            color: white;
            position: relative;
            margin-top: 25px
        }

        .medium .fa-phone {
            position: absolute;
            font-size: 20px;
            transition: all 0.5s;
            left: -50px
        }

        .medium p:nth-child(2) {
            position: absolute;
            top: 1px;
            left: 20px;
            margin-left: 10px;
            font-size: 13px;
            transition: all 0.5s
        }

        .left-side:hover .medium p:nth-child(2) {
            left: 50px
        }

        .medium .fa-envelope-o {
            padding-top: 35px;
            font-size: 17px;
            position: absolute;
            left: -50px;
            top: 22px;
            transition: all 0.5s
        }

        .medium p:nth-child(4) {
            position: absolute;
            top: 55px;
            left: 20px;
            margin-left: 10px;
            font-size: 13px;
            transition: all 0.5s
        }

        .left-side:hover .medium p:nth-child(4) {
            left: 50px
        }

        .medium .fa-map-marker {
            padding-top: 35px;
            font-size: 20px;
            position: absolute;
            top: 72px;
            left: -50px;
            transition: all 0.5s
        }

        .medium p:nth-child(6) {
            position: absolute;
            top: 108px;
            left: 20px;
            margin-left: 10px;
            font-size: 13px;
            transition: all 0.5s
        }

        .left-side:hover .medium p:nth-child(6) {
            left: 50px
        }

        .left-side:hover .fa-phone {
            top: 1px;
            left: 30px;
            position: absolute
        }

        .left-side:hover .fa-envelope-o {
            position: absolute;
            left: 30px
        }

        .left-side:hover .fa-map-marker {
            position: absolute;
            left: 30px
        }

        .last {
            padding: 0 30px;
            padding-top: 272px;
            position: relative;
            letter-spacing: 10px;
            font-size: 15px;
            color: #ccc3e2
        }

        .last .fa-facebook-f {
            position: absolute;
            left: -50px;
            top: 275px;
            transition-delay: 0.6s;
            transition: all 0.5s
        }

        .left-side:hover .fa-facebook-f {
            position: absolute;
            left: 30px
        }

        .last .fa-twitter {
            position: absolute;
            top: 275px;
            left: -50px;
            transition: all 0.5s;
            transition-delay: 0.2s
        }

        .left-side:hover .fa-twitter {
            position: absolute;
            left: 58px
        }

        .last .fa-instagram {
            position: absolute;
            left: -50px;
            top: 275px;
            transition: all 0.5s;
            transition-delay: 0.4s
        }

        .left-side:hover .fa-instagram {
            position: absolute;
            left: 90px
        }

        .last .fa-linkedin {
            position: absolute;
            left: -50px;
            top: 275px;
            transition: all 0.5s;
            transition-delay: 0.6s
        }

        .left-side:hover .fa-linkedin {
            position: absolute;
            left: 120px
        }

        .last:nth-child(5) {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            background-color: #fa949d
        }

        .left-side::before {
            content: '';
            position: absolute;
            background-color: #fa949d;
            height: 270px;
            width: 270px;
            bottom: -120px;
            right: -120px;
            border-radius: 50%
        }

        .left-side::after {
            content: '';
            position: absolute;
            background-color: #7e53f9;
            height: 120px;
            width: 120px;
            bottom: 50px;
            right: 65px;
            border-radius: 50%;
            opacity: 0.9
        }

        .container .card .right-side {
            width: 55%;
            background-color: #fff;
            height: 100%;
            border-radius: 10px;
            padding: 15px 30px;
            position: relative
        }

        .card-details {
            width: 100%;
            position: relative
        }

        .input-group {
            display: flex;
            box-sizing: border-box;
            gap: 10px;
            width: 100%;
            margin-bottom: 20px
        }

        .input-group .input {
            width: 100%
        }

        input[type='text'] {
            height: 25px;
            width: 100%;
            box-sizing: border-box;
            outline: 0;
            border: none;
            border-bottom: 2px solid #ccc
        }

        .input {
            position: relative;
            margin-bottom: 13px
        }

        .input span {
            position: absolute;
            top: 0;
            font-size: 14px;
            left: 0;
            transition: all 0.5s
        }

        .input input:focus~span,
        .input input:valid~span {
            position: absolute;
            top: -13px;
            font-size: 11px
        }

        .card-detalis .input input[type='text']:nth-child(1) {
            position: absolute;
            top: 10px;
            left: 50px
        }

        .right-side p {
            position: absolute;
            top: 220px;
            font-weight: 700;
            font-size: 13px
        }

        .right-side .radio {
            position: relative
        }

        .right-side .radio input:nth-child(1) {
            position: absolute;
            top: 240px;
            left: -225px
        }

        .right-side .radio p:nth-child(2) {
            top: 239px;
            left: -205px;
            font-size: 11px
        }

        .right-side .radio input:nth-child(3) {
            position: absolute;
            top: 240px;
            left: -115px
        }

        .right-side .radio p:nth-child(4) {
            top: 239px;
            left: -95px;
            font-size: 11px
        }

        .right-side .radio input:nth-child(5) {
            position: absolute;
            top: 240px;
            left: 30px
        }

        .right-side .radio p:nth-child(6) {
            top: 239px;
            left: 55px;
            font-size: 11px
        }

        .right-side .radio input:nth-child(7) {
            position: absolute;
            top: 240px;
            left: 160px
        }

        .right-side .radio p:nth-child(8) {
            top: 239px;
            left: 180px;
            font-size: 11px
        }

        .centered {
            display: flex;
            align-items: center;
            font-size: 12px;
            gap: 6px;
            padding-top: 10px
        }

        input[type="radio"] {
            display: none
        }

        input[type="radio"]+label {
            appearance: none;
            cursor: pointer;
            display: inline-block;
            padding-left: 34px;
            position: relative;
            vertical-align: middle
        }

        input[type="radio"]:checked+label {
            backface-visibility: hidden;
            animation: checked 200ms ease 1
        }

        input[type="radio"]+label:before {
            background: none repeat scroll 0 0 rgba(255, 255, 255, 0);
            border-radius: 100% 100% 100% 100%;
            content: "";
            height: 7px;
            left: 12px;
            position: absolute;
            top: 6px;
            width: 7px
        }

        input[type="radio"]+label:hover:before {
            background: none repeat scroll 0 0 rgba(255, 255, 255, 0.5)
        }

        input[type="radio"]:checked+label:before {
            background: none repeat scroll 0 0 blue
        }

        input[type="radio"]+label:after {
            border: 3px solid #ccc;
            border-radius: 100% 100% 100% 100%;
            content: "";
            height: 15px;
            left: 5px;
            position: absolute;
            top: -1px;
            width: 15px
        }

        input[type="radio"]:checked+label:after {
            border-color: blue
        }

        @keyframes checked {
            0% {
                tranform: scale(1)
            }

            50% {
                transform: scale(1.05)
            }

            100% {
                transform: scale(1)
            }
        }

        .text-area {
            margin-top: 30px;
            position: relative
        }

        .text-area span {
            position: absolute;
            top: 0px;
            left: 0;
            transition: all 0.5s
        }

        .text-area textarea:focus~span,
        .text-area textarea:valid~span {
            position: absolute;
            top: -15px;
            font-size: 11px
        }

        .text-area textarea {
            width: 100%;
            height: 60px;
            resize: none;
            border: none;
            border-bottom: 2px solid #ccc;
            outline: none
        }

        .button {
            position: relative
        }

        .button button {
            height: 45px;
            width: 140px;
            background-color: blue;
            color: white;
            font-size: 12px;
            position: absolute;
            bottom: -180px;
            right: 20px;
            border-radius: 7px;
            transition: all 0.5s;
            outline: none;
            border: none;
        }

        .button:hover button {
            background-color: darkblue;
            cursor: pointer
        }

        @media (max-width:750px) {
            .input {
                width: 100%
            }

            .container .card {
                max-width: 350px
            }

            .container .card .right-side {
                width: 100%;
                display: none
            }

            .container .card .left-side {
                width: 100%
            }

            .input-group {
                display: block
            }
        }
    </style> --}}

@section('title')
    Contact
@endsection
@endsection
@section('body')
{{-- <div class="container" style="margin-top: 50px;margin-bottom: 50px">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <div class="top">
                    <h4 style="color: white">Contact Information</h4>
                    <p>Fill up the form and our Team will get back to you within 24 hours.</p>
                </div>
                <div class="medium"> <i class="fa fa-phone"></i>
                    <p style="color: white">+0123 456 78910</p> <i class="fa fa-envelope-o"></i>
                    <p style="color: white">hello@flowbase.com</p> <i class="fa fa-map-marker"></i>
                    <p style="color: white">102 street 2714 Don</p>
                </div>
                <div class="last" style="margin-bottom: 10%">
                    <span>
                        <i class="fa fa-facebook-f"></i></span> <span> <i class="fa fa-twitter"></i></span> <span><i
                            class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i>
                    </span>
                </div>
            </div>
            <div class="right-side" style="margin-top: 70px">
                <form action="{{ route('Add_contact') }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="card-details">
                        <div class="input-group">
                            <div class="input"> <input name="name" placeholder="Name" type="text"
                                    value="{{ Auth::user()->name }}" required="required">
                            </div>
                            <div class="input"> <input name="email" type="text" value="{{ Auth::user()->email }}"
                                    placeholder="Email" required="required"> </div>
                        </div>

                    </div>
                    <div class="below-content">
                        <h6>What was the content you need?</h6>

                        <div class="text-area">
                            <textarea name="message" required="required"></textarea> <span>Message</span>
                        </div>
                        <div class="button" style=""> <button>Send Message</button> </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<div class="bueno-search-area section-padding-100-0 pb-70 bg-img"
    style="background-image: url('user/assets/img/core-img/pattern.png');">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1 style="text-align: center; color: rgb(30, 28, 28)">Contact us</h1>
            </div>
        </div>
    </div>
</div>
<!-- ##### Search Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-9">
                <div class="contact-content mb-100">
                    <h4 class="mb-50">We love seeing your feedback</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique justo id elit
                        bibendum pharetra non vitae lectus. Mauris libero felis, dapibus a ultrices sed, commodo
                        vitae odio. Sed auctor tellus quis arcu tempus. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Etiam ac tincidunt nunc. Cras sed mollis erat.</p>

                    <div class="row align-items-center mt-30 mb-50">
                        <div class="col-12 col-lg-4">
                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <img src="img/core-img/placeholder.png" alt="">
                                </div>
                                <p>1481 Creekside Lane Avila Beach, CA 931</p>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <img src="img/core-img/smartphone.png" alt="">
                                </div>
                                <p>+53 345 7953 32453</p>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="icon mr-15">
                                    <img src="img/core-img/message.png" alt="">
                                </div>
                                <p>yourmail@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <!-- ##### Google Maps ##### -->
                            <div class="map-area">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area mb-70">
                        <h4 class="mb-50">Get In Touch</h4>

                        <form action="{{ route('Add_contact') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" value="{{ Auth::user()->name }}" class="form-control"
                                            name="name" id="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{ Auth::user()->email }}"
                                            class="form-control" id="email" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" required class="form-control" id="message" cols="30" rows="10"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn bueno-btn mt-30" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-12 col-sm-9 col-md-6 col-lg-4 col-xl-3">
                <div class="sidebar-area">



                    <!-- Single Widget Area -->
                    <div class="single-widget-area add-widget mb-30">
                        <img src="{{ asset('user/assets/img/bg-img/add.png') }}" alt="">
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area post-widget mb-30">
                        <!-- Single Post Area -->
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
</section>

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
