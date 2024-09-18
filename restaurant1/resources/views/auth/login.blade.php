{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <a href="{{ route('google') }}" class="btn btn-danger" >login with google</a>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

        * {
            padding: 0;
            margin: 0
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ccc
        }

        .card {
            height: 710px;
            width: 1000px;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
            font-family: 'Poppins', sans-serif
        }

        .card .user {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex
        }

        .image-box {
            width: 50%;
            height: 100%;
            overflow: hidden
        }

        .image-box img {
            box-sizing: border-box;
            object-fit: cover;
            width: 100%;
            height: 100%
        }

        .user .form {
            width: 50%
        }

        .signup_form .image-box {
            position: absolute;
            right: 0;
            transition: all 1s;
            z-index: 1
        }

        .card.active .signup_form .image-box {
            right: 100%
        }

        .card.active .signup_form .form {
            left: 100%
        }

        .card .signup_form .form {
            position: absolute;
            background-color: #fff;
            padding: 20px 30px;
            left: 0;
            box-sizing: border-box;
            transition: all 1s;
            z-index: 1;
            height: 100%
        }

        .flag-text {
            position: relative
        }

        .flag-text select {
            height: 30px;
            width: 100px;
            background-color: #eff5fe;
            outline: 0;
            border: none;
            font-size: 12px;
            cursor: pointer
        }

        .text_signup {
            margin-top: 20px
        }

        .text_signup h4 {
            color: #7870a3
        }

        .text_signup h2 {
            color: #201665
        }

        .text_signup p {
            font-size: 12px;
            font-weight: 700
        }

        .text_signup p a {
            color: blue;
            text-decoration: none;
            cursor: pointer
        }

        .input-text-signup {
            position: relative;
            margin-top: 30px
        }

        input[type="text"] {
            width: 100%;
            height: 40px;
            border: none;
            outline: 0;
            border: 1px solid #cccadc;
            border-radius: 5px;
            padding-left: 5px;
            padding-right: 20px;
            box-sizing: border-box
        }

        input[type="password"] {
            width: 100%;
            height: 40px;
            border: none;
            outline: 0;
            border: 1px solid #cccadc;
            border-radius: 5px;
            padding-left: 5px;
            padding-right: 24px;
            box-sizing: border-box
        }

        .input-text-signup i {
            position: absolute;
            top: 15px;
            right: 8px;
            color: #6b6589;
            cursor: pointer;
            font-size: 13px
        }

        .fa-eye {
            position: absolute;
            top: 12px;
            right: 8px
        }

        .input-text-signup label {
            position: absolute;
            left: 5px;
            top: 12px;
            font-size: 12px;
            transition: all 0.5s;
            pointer-events: none
        }

        .input-text-signup input:focus~label,
        .input-text-signup input:valid~label {
            top: -16px;
            font-weight: 700;
            color: #7187d2
        }

        .signup-button {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px
        }

        .signup-button button {
            width: 100%;
            height: 40px;
            border: none;
            outline: 0;
            border-radius: 5px;
            font-size: 12px;
            color: #fff;
            background-color: #3e66f7;
            cursor: pointer;
            transition: all 0.5s
        }

        .signup-button button:hover {
            background-color: blue
        }

        .policy {
            margin-top: 20px
        }

        .policy p {
            font-size: 12px;
            font-weight: 700
        }

        .policy p a {
            color: blue;
            text-decoration: none;
            cursor: pointer
        }

        .warning {
            border: 1px solid red !important
        }

        .signin_form .form {
            background-color: #fff;
            padding: 20px 30px;
            left: 0;
            box-sizing: border-box;
            transition: all 1s
        }


        @media(max-width:690px) {
            .container {
                height: scroll;
            }

            .card {
                max-width: 350px;
            }

            .image-box {
                display: none;
            }

            .user .form {
                width: 100%;
                height: scroll;
            }


        }
    </style>

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="user signup_form">
                <div class="form">

                    <div class="text_signup">
                        <h4>Register Now</h4>
                        <h2>Sign up for free</h2>
                        <p>Already have an account <a href="#" class="signin-click">Sign In</a></p>
                    </div>
                    <div class="input-text-signup"> <input type="text" required> <i class="fa fa-user"></i>
                        <label>Username</label>
                    </div>
                    <div class="input-text-signup"> <input type="text" required> <i class="fa fa-envelope-o"></i>
                        <label>E-mail</label>
                    </div>
                    <div class="input-text-signup"> <input type="password" id="password_input" required> <i
                            class="fa fa-eye-slash"></i> <label>Password</label> </div>
                    <div class="signup-button"> <button>Sign up</button> </div>
                    <div class="policy">
                        <p>By clicking Sign up,you agree to our <a href="#">Terms</a> and that you have read our
                            <a href="#">Data Use Policy</a> ,including our <a href="#">Cookie Use</a>.
                        </p>
                    </div>
                </div>
                <div class="image-box"> <img src="{{ asset('user/assets/img/bg-img/1.jpg') }}"> </div>
            </div>



            <div class="user signin_form">
                <div class="image-box"> <img src="{{ asset('user/assets/img/bg-img/1.jpg') }}"> </div>
                <div class="form">
                    <div class="flag-text"> <select>
                            <option>English</option>
                            <option>Hindi</option>
                            <option>Other</option>
                        </select> </div>
                    <div class="text_signup">
                        <h4>Start your journey</h4>
                        <h2>Sign up to Ocula</h2>
                        <p>Don't have an account?<a href="#" class="signup-click">Sign Up</a></p>
                    </div>
                    <div class="input-text-signup"> <input type="text" required> <i class="fa fa-envelope-o"></i>
                        <label>E-mail</label>
                    </div>
                    <div class="input-text-signup"> <input type="password" id="password_input_signin" required> <i
                            class="fa fa-eye-slash change_eye"></i> <label>Password</label> </div>
                    <div class="signup-button"> <button>Sign in</button> </div>
                    <div class="policy">
                        <p>By clicking Sign up,you agree to our <a href="#">Terms</a> and that you have read our
                            <a href="#">Data Use Policy</a> ,including our <a href="#">Cookie Use</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var signin_click = document.querySelector(".signin-click");
        var card_toggle = document.querySelector(".card");
        signin_click.addEventListener('click', function() {
            card_toggle.classList.toggle('active');
        });


        var signup_click = document.querySelector(".signup-click");
        var card_toggle = document.querySelector(".card");
        signup_click.addEventListener('click', function() {

            card_toggle.classList.toggle('active');
        });

        var click_eye_signin = document.querySelector(".change_eye");
        var input_signin = document.querySelector("#password_input_signin");
        var eye_signin = document.querySelector(".change_eye");
        click_eye_signin.addEventListener('click', function() {
            if (input_signin.type == 'password') {
                input_signin.type = 'text'
                input_signin.classList.add('warning');
                eye_signin.classList.remove('fa-eye-slash')
                eye_signin.classList.add('fa-eye')
            } else {
                input_signin.type = 'password'
                input_signin.classList.remove('warning');
                eye_signin.classList.add('fa-eye-slash')
                eye_signin.classList.remove('fa-eye')
            }
        });






        var click_eye = document.querySelector(".fa-eye-slash");
        var input = document.querySelector("#password_input");
        var eye = document.querySelector(".fa-eye-slash");
        click_eye.addEventListener('click', function() {
            if (input.type == 'password') {
                input.type = 'text'
                input.classList.add('warning');
                eye.classList.remove('fa-eye-slash')
                eye.classList.add('fa-eye')
            } else {
                input.type = 'password'
                input.classList.remove('warning');
                eye.classList.add('fa-eye-slash')
                eye.classList.remove('fa-eye')
            }
        });
    </script>



</body>

</html> --}}


<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>

<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1"
        style="height: 600px; ">
        <div class="lg:w-1/2 xl:w-5/12 p-7 sm:p-15">
            {{-- <div>
                    <img src=""
                        class="w-32 mx-auto" />
                </div> --}}
            <div class="mt-13 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    {{-- <p class="mt-3 text-xs text-gray-600">If you do not have account <a
                            class="border-b border-gray-500 border-dotted" href="{{ route('register') }}"> Sign Up</a>
                    </p> --}}
                    <h4 class="signup">Don't have an account?
                        <a rel="noopener noreferrer" href="{{ route('register') }}" class="">Sign up</a>
                    </h4>
                </h1>
                <div class="w-full flex-1 mt-8">
                    <div class="flex flex-col items-center">
                        <a href="{{ route('google') }}"
                            class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
                            <div class="bg-white p-2 rounded-full">
                                <svg class="w-4" viewBox="0 0 533.5 544.3">
                                    <path
                                        d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                                        fill="#4285f4" />
                                    <path
                                        d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                                        fill="#34a853" />
                                    <path
                                        d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
                                        fill="#fbbc04" />
                                    <path
                                        d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z"
                                        fill="#ea4335" />
                                </svg>
                            </div>
                            <span class="ml-4">
                                Login in with Google
                            </span>
                        </a>

                        <a href="{{ route('facebook') }}"
                            class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline mt-5">
                            <div class="bg-white p-1 rounded-full">


                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="88.428 12.828 107.543 207.085" id="facebook">
                                    <path fill="#3c5a9a"
                                        d="M158.232 219.912v-94.461h31.707l4.747-36.813h-36.454V65.134c0-10.658 2.96-17.922 18.245-17.922l19.494-.009V14.278c-3.373-.447-14.944-1.449-28.406-1.449-28.106 0-47.348 17.155-47.348 48.661v27.149H88.428v36.813h31.788v94.461l38.016-.001z">
                                    </path>
                                </svg>

                            </div>

                            <span class="ml-4">
                                Login in with Facebook
                            </span>
                        </a>
                    </div>

                    <div class="my-12 border-b text-center">
                        <div
                            class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                            Or Login in with e-mail
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mx-auto max-w-xs">
                            <input
                                class="@error('email') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="email" placeholder="Email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input name="password" required autocomplete="current-password"
                                class="@error('password') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                type="password" placeholder="Password" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror





                            <button type="submit"
                                class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    viewBox="0 0 24 24" id="Login">
                                    <path
                                        d="m15.53,11.47l-3-3c-.29-.29-.77-.29-1.06,0s-.29.77,0,1.06l1.72,1.72H4c-.41,0-.75.34-.75.75s.34.75.75.75h9.19l-1.72,1.72c-.29.29-.29.77,0,1.06.15.15.34.22.53.22s.38-.07.53-.22l3-3c.29-.29.29-.77,0-1.06Z"
                                        fill="#ffffff" class="color000000 svgShape"></path>
                                    <path
                                        d="m18,3.25h-3c-.41,0-.75.34-.75.75s.34.75.75.75h3c.69,0,1.25.56,1.25,1.25v12c0,.69-.56,1.25-1.25,1.25h-3c-.41,0-.75.34-.75.75s.34.75.75.75h3c1.52,0,2.75-1.23,2.75-2.75V6c0-1.52-1.23-2.75-2.75-2.75Z"
                                        fill="#ffffff" class="color000000 svgShape"></path>
                                </svg>
                                <span class="ml-3">
                                    Login
                                </span>
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <p class="mt-6 text-xs text-gray-600 text-center">
                                I agree to abide by templatana's
                                <a href="#" class="border-b border-gray-500 border-dotted">
                                    Terms of Service
                                </a>
                                and its
                                <a href="#" class="border-b border-gray-500 border-dotted">
                                    Privacy Policy
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img src="{{ asset('user/assets/img/bg-img/gallery-3.jpg') }}" style="width: 60%;height: 600px;">
        {{-- <div class="flex-1 bg-indigo-100 text-center hidden lg:flex" style=" ">
            <div class="m-12 xl:m-19 w-full bg-contain bg-center bg-no-repeat" style="">
            </div>
        </div> --}}
    </div>

    <script>
        /* YOU DONT NEED THESE, these are just for the popup you see */
        function closeTreactPopup() {
            document.querySelector(".treact-popup").classList.add("hidden");
        }

        function openTreactPopup() {
            document.querySelector(".treact-popup").classList.remove("hidden");
        }
        document.querySelector(".close-treact-popup").addEventListener("click", closeTreactPopup);
        setTimeout(openTreactPopup, 3000)
    </script>
</body>

</html>





















{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif
        }

        .backrgound {
            background-image: url(asset('user/assets/img/bg-img/1.jpg'));
        }

        .section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eee;

        }

        .section .container {
            height: 500px;
            width: 800px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden
        }

        .section .container .form {
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            display: flex
        }

        .section .container .left-side {
            width: 55%;
            /* background-color: #040387; */
            height: 100%
        }

        .section .container .left-side .content {
            color: #fff;
            letter-spacing: 1px;
            margin-top: 80px;
            padding: 10px 30px;
            text-align: center
        }

        .section .container .left-side .social {
            padding: 10px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .section .container .left-side .social .social-icons {
            list-style: none;
            display: flex
        }

        .section .container .left-side .social .social-icons li {
            margin: 5px
        }

        .section .container .left-side .social .social-icons a {
            color: #fff;
            transition: all 0.5s
        }

        .section .container .left-side .social .social-icons a i {
            color: #fff;
            transition: all 0.5s
        }

        .section .container .left-side .social .social-icons a:hover i {
            transform: rotate(360deg)
        }

        .section .container .left-side .social .terms {
            list-style: none;
            display: flex;
            margin-top: 3px
        }

        .section .container .left-side .social .terms li .dots {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background-color: #eee;
            display: flex;
            margin: 12px 5px
        }

        .section .container .left-side .social .terms li a {
            font-size: 12px;
            text-decoration: none;
            letter-spacing: 1px;
            color: #fff
        }

        .section .container .left-side .content h5 {
            font-size: 19px
        }

        .section .container .left-side .content p {
            font-size: 10px
        }

        .section .container .right-side {
            width: 45%;
            background-color: #fff;
            height: 100%;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .section .container .right-side .forms {
            padding-right: 20px;
            width: 100%
        }

        .section .container .right-side .forms input {
            width: 100% !important;
            height: 45px;
            border: none;
            margin-bottom: 10px;
            padding: 0px 10px;
            border: 2px solid #eee;
            transition: all 0.5s;
            background-color: #e8f0fe;
            border-radius: 3px;
            outline: none;
            box-shadow: none
        }

        .section .container .right-side .forms input[type="submit"] {
            width: 100%;
            background-color: #040387;
            border-radius: 5px;
            color: #fff;
            letter-spacing: 1px;
            cursor: pointer;
            border: none;
            text-transform: uppercase
        }

        .section .container .right-side .forms input[type="submit"]:hover {
            background-color: #020242
        }

        .submit-button {
            width: 110%
        }

        .section .container .right-side .forms input:focus {
            border: 2px solid #000 !important
        }

        .strength-list {
            margin-left: 5px;
            list-style: none;
            margin-bottom: 5px
        }

        .form-inputs {
            position: relative;
            width: 100% !important
        }

        .form-inputs i {
            position: absolute;
            top: 14px;
            right: -10px;
            color: #dbdada;
            z-index: 1000
        }

        .list-group i {
            font-size: 10px;
            color: #aaa
        }

        .list-group span {
            font-size: 11px;
            color: #aaa;
            letter-spacing: 1px;
        }

        .green-color {
            color: green !important
        }

        .random_password {
            margin-top: 5px;
            letter-spacing: 1px;
            font-size: 11px;
            cursor: pointer
        }

        @media (max-width:750px) {
            .section .container {
                max-width: 350px
            }

            .section .container .left-side {
                display: none
            }

            .section .container .right-side {
                width: 100%
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body >




            <div class="section" style="background-image: url(asset('user/assets/img/bg-img/1.jpg'))">
                <div class="container">
                    <div class="form">
                        <div class="left-side">
                            <div class="content">
                        <h5>Shop with confidence</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p> <img src="" width="300">
                    </div>
                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <ul class="terms">
                            <li><a href="#">Terms</a></li>
                            <li><span class="dots"></span></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                        </div>
                        <div class="right-side">
                            <div class="forms">
                                <div class="form-inputs"> <input type="text" placeholder="User name"> <i
                                        class="fa fa-user"></i>
                                </div>
                                <div class="form-inputs"> <input type="email" placeholder="Email"
                                        autocomplete='chrome-off'>
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="form-inputs"> <input id="password_input" class="password-input"
                                        autocomplete='chrome-off' type="password" placeholder="Password"> <i
                                        class="fa fa-eye" id="password_eye"></i>
                                    <p id="random_password" class="random_password"></p>
                                </div>
                                <ul class="strength-list">
                                    <li> <span class="loweruppercase list-group"> <i class="fa fa-circle"></i>
                                            <span>Lowercase
                                                uppercase</span> </span> </li>
                                    <li> <span class="list-group numbercase"> <i class="fa fa-circle"></i> <span>Number
                                                (0-9)</span>
                                        </span> </li>
                                    <li> <span class="list-group specialcase"> <i class="fa fa-circle"></i>
                                            <span>Special
                                                Characters(!#@$%*)</span> </span> </li>
                                    <li> <span class="list-group numcharacter"> <i class="fa fa-circle"></i> <span>8
                                                Characters</span> </span> </li>
                                </ul>
                                <div class="submit-button"> <input type="submit"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <script>
        const password_input = document.querySelector("#password_input");
        const password_eye = document.querySelector("#password_eye");
        let loweruppercase = document.querySelector(".loweruppercase i");
        let loweruppercasetext = document.querySelector(".loweruppercase span");

        let numbercase = document.querySelector(".numbercase i");
        let numbercasetext = document.querySelector(".numbercase span");
        let specialcase = document.querySelector(".specialcase i");
        let specialcasetext = document.querySelector(".specialcase span");

        let numcharacter = document.querySelector(".numcharacter i");
        let numcharactertext = document.querySelector(".numcharacter span");


        password_eye.addEventListener('click', () => {
            if (password_input.type == "password") {
                password_input.type = "text";
                password_eye.classList.add("fa-eye");
                password_eye.classList.remove("fa-eye-slash");


            } else if (password_input.type == "text") {
                password_input.type = "password";
                password_eye.classList.add("fa-eye-slash");
                password_eye.classList.remove("fa-eye");
            }

        });

        password_input.addEventListener('keyup', function() {

            let pass = document.getElementById("password_input").value;
            passStrength(pass);
        });

        function passStrength(pass) {

            if (pass.length > 7) {

                numcharacter.classList.remove("fa-circle");
                numcharacter.classList.add("fa-check");
                numcharacter.classList.add("green-color");
                numcharactertext.classList.add("green-color");
            } else {

                numcharacter.classList.remove("fa-check");
                numcharacter.classList.add("fa-circle");
                numcharacter.classList.remove("green-color");
                numcharactertext.classList.remove("green-color");
            }

            if (pass.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {

                loweruppercase.classList.remove("fa-circle");
                loweruppercase.classList.add("fa-check");
                loweruppercase.classList.add("green-color");
                loweruppercasetext.classList.add("green-color");
            } else {

                loweruppercase.classList.remove("fa-check");
                loweruppercase.classList.add("fa-circle");
                loweruppercase.classList.remove("green-color");
                loweruppercasetext.classList.remove("green-color");
            }


            if (pass.match(".*\\d.*")) {

                numbercase.classList.remove("fa-circle");
                numbercase.classList.add("fa-check");
                numbercase.classList.add("green-color");
                numbercasetext.classList.add("green-color");
            } else {

                numbercase.classList.remove("fa-check");
                numbercase.classList.add("fa-circle");
                numbercase.classList.remove("green-color");
                numbercasetext.classList.remove("green-color");
            }


            if (pass.match(/[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/)) {

                specialcase.classList.remove("fa-circle");
                specialcase.classList.add("fa-check");
                specialcase.classList.add("green-color");
                specialcasetext.classList.add("green-color");
            } else {

                specialcase.classList.remove("fa-check");
                specialcase.classList.add("fa-circle");
                specialcase.classList.remove("green-color");
                specialcasetext.classList.remove("green-color");
            }


        }

        var password = document.getElementById('password_input');
        let random_password = document.querySelector('#random_password');
        var passwordLength = 14;
        var passwordVal = "";

        window.onload = function loadPassword() {

            let randomGenerateChars = "B&vp3hSMQQsu#sR2+mTJx6kf6kHhHk^nNceWW_$=tEG#";

            for (var i = 0; i < passwordLength; i++) {
                let randomNumber = Math.floor(Math.random() * randomGenerateChars.length);
                passwordVal += randomGenerateChars.substring(randomNumber, randomNumber + 1);
            }
            random_password.innerHTML = "Password suggestion - " + passwordVal;
        };
        password.addEventListener('focus', function() {
            if (password.value === '') {
                random_password.style.display = 'block';
            }
        });
        random_password.addEventListener('click', function() {

            password_input.value = passwordVal;
            random_password.style.display = 'none';
        });
    </script>
</body>

</html> --}}
