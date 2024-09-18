<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
<!-- Layout styles -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
<!-- End layout styles -->
<link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    /* From Uiverse.io by vinodjangid07 */
    .inbox-btn {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: none;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.082);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        background-color: black;
        cursor: pointer;
        transition: all 0.3s;
    }

    .inbox-btn svg path {
        fill: white;
    }

    .inbox-btn svg {
        height: 17px;
        transition: all 0.3s;
    }

    .msg-count {
        position: absolute;
        top: -5px;
        right: -5px;
        background-color: rgb(255, 255, 255);
        border-radius: 50%;
        font-size: 0.7em;
        color: rgb(0, 0, 0);
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .inbox-btn:hover {
        transform: scale(1.1);
    }
</style>
<style>
    /* From Uiverse.io by asgardOP */
    .loader {
        width: fit-content;
        height: fit-content;
        background-color: rgb(58, 58, 58);
        border-radius: 7px;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        cursor: pointer;
        transition: 0.2s;
    }

    .loader:hover {
        background-color: rgb(26, 26, 26);
    }

    .loader:hover svg {
        color: white;
    }

    .loader svg {
        color: rgba(255, 255, 255, 0.651);
        transform: scale(1.2);
        transition: 0.2s;
    }

    .point {
        position: absolute;
        bottom: 5px;
        left: 5px;
        width: 6px;
        height: 6px;
        background-color: rgb(0, 255, 0);
        border-radius: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .point::before {
        content: "";
        position: absolute;
        width: 1px;
        height: 1px;
        background-color: rgb(0, 255, 0);
        border-radius: 25px;
        animation: loop 1s 0s infinite;
    }

    @keyframes loop {
        0% {
            background-color: rgb(0, 255, 0);
            width: 1px;
            height: 1px;
        }

        100% {
            background-color: rgba(0, 255, 0, 0);
            width: 30px;
            height: 30px;
        }
    }
</style>
@yield('css')
