{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="w-full flex-1 mt-8">

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mx-auto max-w-xs">
                            <input id="email"
                                class="@error('email') is-invalid @enderror w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="email" placeholder="Email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus />
                            @error('email')
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
                                    Send Password Reset Link
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
        {{-- <img src="{{ asset('user/assets/img/bg-img/gallery-3.jpg') }}" style="width: 60%;height: 600px;"> --}}
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
