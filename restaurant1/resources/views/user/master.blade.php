<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">

<head>
    @include('user.layout.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" /> --}}
    {{-- <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        /* html,
        body {
            display: grid;
            height: 100%;
            width: 100%;
            place-items: center;
            background: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
        } */

        .icons_container {
            display: inline-flex;
        }

        .icons_container .icon {
            margin: 0 10px;
            text-align: center;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            position: relative;
            z-index: 2;
            transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .icons_container .icon span {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 19px;
            height: 50px;
            width: 50px;
            background: #fff;
            border-radius: 50%;
            position: relative;
            z-index: 2;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
            transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);

        }

        .icons_container .icon .tooltip {
            position: absolute;
            top: 0;
            z-index: 1;
            background: #fff;
            color: #fff;
            padding: 10px 18px;
            font-size: 16px;
            font-weight: 500;
            border-radius: 10px;
            opacity: 0;
            pointer-events: none;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
            transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .icons_container .icon:hover .tooltip {
            top: -60px;
            opacity: 1;
            pointer-events: auto;
        }

        .icon .tooltip:before {
            position: absolute;
            content: "";
            height: 15px;
            width: 15px;
            background: #fff;
            left: 50%;
            bottom: -6px;
            transform: translateX(-50%) rotate(45deg);
            transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .icons_container .icon:hover span {
            color: #fff;
        }

        .icons_container .icon:hover span,
        .icons_container .icon:hover .tooltip {
            text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.4);
        }

        .icons_container .facebook:hover span,
        .icons_container .facebook:hover .tooltip,
        .icons_container .facebook:hover .tooltip:before {
            background: #3B5999;
        }

        .icons_container .twitter:hover span,
        .icons_container .twitter:hover .tooltip,
        .icons_container .twitter:hover .tooltip:before {
            background: #46C1F6;
        }

        .icons_container .instagram:hover span,
        .icons_container .instagram:hover .tooltip,
        .icons_container .instagram:hover .tooltip:before {
            background: #e1306c;
        }

        .icons_container .github:hover span,
        .icons_container .github:hover .tooltip,
        .icons_container .github:hover .tooltip:before {
            background: #333;
        }

        .icons_container .youtube:hover span,
        .icons_container .youtube:hover .tooltip,
        .icons_container .youtube:hover .tooltip:before {
            background: #DE463B;
        }
    </style> --}}
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

</head>

<body dir="{{ Config::get('app.locale') == 'en' ? 'ltr' : 'rtl' }}">
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
    @include('user.pages.trend_post')


    @yield('body')


    <!-- ##### Footer Area Start ##### -->
    @include('user.layout.footer')
    <!-- ##### Footer Area Start ##### -->

    @include('user.layout.js')
</body>

</html>
