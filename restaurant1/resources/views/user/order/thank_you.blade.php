<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.layout.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        /* --------------------------------

                File#: _1_thank-you
                Title: Thank You
                Descr: Order confirmation template
                Usage: codyhouse.co/license

                -------------------------------- */

        /* reset */
        *,
        *::after,
        *::before {
            box-sizing: border-box;
        }

        * {
            font: inherit;
            margin: 0;
            padding: 0;
            border: 0;
        }

        html {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            background-color: hsl(0, 0%, 100%);
            font-family: system-ui, sans-serif;
            color: hsl(230, 7%, 23%);
            font-size: 1.125rem;
            /* 18px */
            line-height: 1.4;
        }

        h1,
        h2,
        h3,
        h4 {
            line-height: 1.2;
            color: hsl(230, 13%, 9%);
            font-weight: 700;
        }

        h1 {
            font-size: 2.5rem;
            /* 40px */
        }

        h2 {
            font-size: 2.125rem;
            /* 34px */
        }

        h3 {
            font-size: 1.75rem;
            /* 28px */
        }

        h4 {
            font-size: 1.375rem;
            /* 22px */
        }

        ol,
        ul,
        menu {
            list-style: none;
        }

        button,
        input,
        textarea,
        select {
            background-color: transparent;
            border-radius: 0;
            color: inherit;
            line-height: inherit;
            -webkit-appearance: none;
            appearance: none;
        }

        textarea {
            resize: vertical;
            overflow: auto;
            vertical-align: top;
        }

        /* a {
            color: hsl(250, 84%, 54%);
        } */

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /* img,
            video,
            svg {
                display: block;
                max-width: 100%;
            } */

        /* --------------------------------

                Icons

                -------------------------------- */

        .cd-icon {
            --size: 1em;
            font-size: var(--size);
            height: 1em;
            width: 1em;
            display: inline-block;
            color: inherit;
            fill: currentColor;
            line-height: 1;
            flex-shrink: 0;
            max-width: initial;
        }

        /* --------------------------------

                Component

                -------------------------------- */

        .thank-you__icon {
            --size: 96px;
            color: hsl(170, 78%, 36%);
        }

        .thank-you__paragraph {
            line-height: 1.4;
            color: hsl(225, 4%, 47%);
        }

        /* --------------------------------

                Utilities

                -------------------------------- */

        .cd-position-relative {
            position: relative;
        }

        .cd-z-index-1 {
            z-index: 1;
        }

        .cd-margin-bottom-xs {
            margin-bottom: 1rem;
        }

        .cd-padding-y-2xl {
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .cd-container {
            width: calc(100% - 3rem);
            margin-left: auto;
            margin-right: auto;
        }

        .cd-max-width-adaptive-sm {
            max-width: 32rem;
        }

        @media (min-width: 48rem) {
            .cd-max-width-adaptive-sm {
                max-width: 48rem;
            }
        }

        .cd-text-center {
            text-align: center;
        }

        /* link */
        .cd-link {
            color: hsl(250, 84%, 54%);
            text-decoration: none;
            background-image: linear-gradient(to right, hsl(250, 84%, 54%) 50%, hsla(250, 84%, 54%, 0.2) 50%);
            background-size: 200% 1px;
            background-repeat: no-repeat;
            background-position: 100% 100%;
            transition: background-position 0.2s;
        }

        .cd-link:hover {
            background-position: 0% 100%;
        }
    </style>
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
{{-- <title>Thank you</title> --}}

</head>

<body class="goto-here">


    @include('user.layout.navbar')

    <section class="cd-position-relative cd-z-index-1 cd-padding-y-2xl">
        <div class="cd-container cd-max-width-adaptive-sm cd-text-center">
            <svg class="cd-icon thank-you__icon cd-margin-bottom-sm" viewBox="0 0 96 96" aria-hidden="true">
                <g fill="currentColor">
                    <circle cx="48" cy="48" r="48" opacity=".1"></circle>
                    <circle cx="48" cy="48" r="31" opacity=".2"></circle>
                    <circle cx="48" cy="48" r="15" opacity=".3"></circle>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M40 48.5l5 5 11-11"></path>
                    <path transform="rotate(25.474 70.507 8.373)" opacity=".5" d="M68.926 4.12h3.159v8.506h-3.159z">
                    </path>
                    <path transform="rotate(-52.869 17.081 41.485)" opacity=".5"
                        d="M16.097 36.336h1.969v10.298h-1.969z">
                    </path>
                    <path transform="rotate(82.271 75.128 61.041)" opacity=".5"
                        d="M74.144 57.268h1.969v7.547h-1.969z">
                    </path>
                    <circle cx="86.321" cy="41.45" r="2.946" opacity=".5"></circle>
                    <circle cx="26.171" cy="78.611" r="1.473" opacity=".5"></circle>
                    <circle cx="49.473" cy="9.847" r="1.473" opacity=".5"></circle>
                    <circle cx="10.283" cy="63" r="2.946" opacity=".2"></circle>
                    <path opacity=".4" d="M59.948 88.142l10.558-3.603-4.888-4.455-5.67 8.058z"></path>
                    <path opacity=".3" d="M18.512 19.236l5.667 1.456.519-8.738-6.186 7.282z"></path>
                </g>
            </svg>

            <div>
                <h1 class="cd-margin-bottom-xs">Thank you!</h1>
                <p class="thank-you__paragraph cd-margin-bottom-xs">Your Order will be sent within 30 minutes
                </p>

                <a class="cd-link" href="{{ route('user') }}">
                    <button class="btn btn-success">

                        Continue shopping →
                    </button>
                </a>

            </div>
        </div>
    </section>



    @include('user.layout.footer')

    @include('user.layout.js')
