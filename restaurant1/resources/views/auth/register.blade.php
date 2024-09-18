{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <a href="{{ route('google') }}" class="btn btn-danger">login with google</a>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        .green-color {
            color: green !important
        }
        .form-inputs {
            position: relative;
            width: 100% !important
        }
        .form-inputs i {
            position: absolute;
            top: 40px;
            right: 10px;
            color: #dbdada;
            z-index: 1000
        }

        .password-input {
            position: relative;

        }
        .strength-list {
            margin-left: 5px;
            list-style: none;
            margin-bottom: 5px
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

</head>

<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1"
        style="height: 830px">
        <div class="lg:w-1/2 xl:w-5/12 p-7 sm:p-15">
            {{-- <div>
                    <img src=""
                        class="w-32 mx-auto" />
                </div> --}}
            <div class="mt-13 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    <p class="mt-3 text-xs text-gray-600">Do you have account <a
                        class="border-b border-gray-500 border-dotted" href="{{ route('login') }}"> Login</a></p>
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
                                Sign Up with Google
                            </span>
                        </a>

                        <a href="{{ route('facebook') }}"
                            class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline mt-5">
                            <div class="bg-white p-1 rounded-full">
                                {{-- <svg class="w-6" viewBox="0 0 32 32">
                                    <path fill-rule="evenodd"
                                        d="M16 4C9.371 4 4 9.371 4 16c0 5.3 3.438 9.8 8.207 11.387.602.11.82-.258.82-.578 0-.286-.011-1.04-.015-2.04-3.34.723-4.043-1.609-4.043-1.609-.547-1.387-1.332-1.758-1.332-1.758-1.09-.742.082-.726.082-.726 1.203.086 1.836 1.234 1.836 1.234 1.07 1.836 2.808 1.305 3.492 1 .11-.777.422-1.305.762-1.605-2.664-.301-5.465-1.332-5.465-5.93 0-1.313.469-2.383 1.234-3.223-.121-.3-.535-1.523.117-3.175 0 0 1.008-.32 3.301 1.23A11.487 11.487 0 0116 9.805c1.02.004 2.047.136 3.004.402 2.293-1.55 3.297-1.23 3.297-1.23.656 1.652.246 2.875.12 3.175.77.84 1.231 1.91 1.231 3.223 0 4.61-2.804 5.621-5.476 5.922.43.367.812 1.101.812 2.219 0 1.605-.011 2.898-.011 3.293 0 .32.214.695.824.578C24.566 25.797 28 21.3 28 16c0-6.629-5.371-12-12-12z" />
                                </svg> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="88.428 12.828 107.543 207.085" id="facebook"><path fill="#3c5a9a" d="M158.232 219.912v-94.461h31.707l4.747-36.813h-36.454V65.134c0-10.658 2.96-17.922 18.245-17.922l19.494-.009V14.278c-3.373-.447-14.944-1.449-28.406-1.449-28.106 0-47.348 17.155-47.348 48.661v27.149H88.428v36.813h31.788v94.461l38.016-.001z"></path></svg>

                            </div>
                            <span class="ml-4">
                                Sign Up with Facebook
                            </span>
                        </a>
                    </div>

                    <div class="my-12 border-b text-center">
                        <div
                            class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                            Or sign up with e-mail
                        </div>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mx-auto max-w-xs">
                            <input style="margin-bottom: 15px"
                                class="@error('name') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="text" placeholder="Name" name="name" value="{{ old('name') }}" required
                                autofocus />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <input
                                class="@error('email') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="email" placeholder="Email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-inputs">
                                <input name="password" required autocomplete="current-password" id="password_input"
                                    class="@error('password') is-invalid @enderror password-input w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="password" placeholder="Password" />
                                <i class="fa fa-eye" id="password_eye"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <input name="password_confirmation" required autocomplete="new-password"
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                type="password" placeholder="Password" />
                            <ul class="strength-list" style="margin-top: 10px">
                                <li> <span class="loweruppercase list-group"> <i class="fa fa-circle"
                                            style="color: slategray"></i>
                                        <span>Lowercase
                                            uppercase</span> </span> </li>
                                <li> <span class="list-group numbercase"> <i class="fa fa-circle"
                                            style="color: slategray"></i> <span>Number
                                            (0-9)</span>
                                    </span> </li>
                                <li> <span class="list-group specialcase"> <i class="fa fa-circle"
                                            style="color: slategray"></i>
                                        <span>Special
                                            Characters(!#@$%*)</span> </span> </li>
                                <li> <span class="list-group numcharacter"> <i class="fa fa-circle"
                                            style="color: slategray"></i> <span>8
                                            Characters</span> </span> </li>
                            </ul>


                            <button type="submit"
                                class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <path d="M20 8v6M23 11h-6" />
                                </svg>
                                <span class="ml-3">
                                    Sign Up
                                </span>
                            </button>


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
        <img src="{{ asset('user/assets/img/bg-img/about.jpg') }}" style="width: 60%;height: 830px;">
        {{-- <div class="flex-1 bg-indigo-100 text-center hidden lg:flex" style=" ">
            <div class="m-12 xl:m-19 w-full bg-contain bg-center bg-no-repeat" style="">
            </div>
        </div> --}}
    </div>
    {{-- <div class="REMOVE-THIS-ELEMENT-IF-YOU-ARE-USING-THIS-PAGE hidden treact-popup fixed inset-0 flex items-center justify-center"
        style="background-color: rgba(0,0,0,0.3);">
        <div class="max-w-lg p-8 sm:pb-4 bg-white rounded shadow-lg text-center sm:text-left">

            <h3 class="text-xl sm:text-2xl font-semibold mb-6 flex flex-col sm:flex-row items-center">
                    <div class="bg-green-200 p-2 rounded-full flex items-center mb-4 sm:mb-0 sm:mr-2">
                        <svg class="text-green-800 inline-block w-5 h-5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z">
                            </path>
                        </svg>
                    </div>
                    Free TailwindCSS Component Kit!
                </h3>
                <p>I recently released Treact, a <span class="font-bold">free</span> TailwindCSS Component Kit built
                    with React.</p>
                <p class="mt-2">It has 52 different UI components, 7 landing pages, and 8 inner pages prebuilt. And
                    they are customizable!</p>
                <div
                    class="mt-8 pt-8 sm:pt-4 border-t -mx-8 px-8 flex flex-col sm:flex-row justify-end leading-relaxed">
                    <button
                        class="close-treact-popup px-8 py-3 sm:py-2 rounded border border-gray-400 hover:bg-gray-200 transition duration-300">Close</button>
                    <a class="font-bold mt-4 sm:mt-0 sm:ml-4 px-8 py-3 sm:py-2 rounded bg-purple-700 text-gray-100 hover:bg-purple-900 transition duration-300 text-center"
                        href="https://treact.owaiskhan.me" target="_blank">See Treact</a>
                </div>
        </div>
    </div> --}}
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

</html>
