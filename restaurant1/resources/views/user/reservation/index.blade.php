{{-- <!DOCTYPE html>
<html>

<head>
    <title>Laravel 9 - Stripe Payment Gateway Integration Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">

        <h1>Laravel 9 - Stripe Payment Gateway Integration Example <br /> ItSolutionStuff.com</h1>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table">
                        <h3 class="panel-title">Payment Details</h3>
                    </div>
                    <div class="panel-body">

                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        <form role="form" action="{{ route('stripe.post') }}" method="post"
                            class="require-validation" data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                            @csrf

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input class='form-control'
                                        size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group card required'>
                                    <label class='control-label'>Card Number</label> <input autocomplete='off'
                                        class='form-control card-number' size='20' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                        class='form-control card-cvc' placeholder='ex. 311' size='4'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                        type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try
                                        again.</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now
                                        ($100)</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {

        /*------------------------------------------
        --------------------------------------------
        Stripe Payment Code
        --------------------------------------------
        --------------------------------------------*/

        var $form = $(".require-validation");

        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        /*------------------------------------------
        --------------------------------------------
        Stripe Response Handler
        --------------------------------------------
        --------------------------------------------*/
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];

                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>

</html> --}}















@extends('user.master')

@section('css')
    {{-- <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
        }

        .formbold-mb-5 {
            margin-bottom: 20px;
        }

        .formbold-pt-3 {
            padding-top: 12px;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 550px;
            width: 100%;
            background: white;
        }

        .formbold-form-label {
            display: block;
            font-weight: 500;
            font-size: 16px;
            color: white;
            margin-bottom: 12px;
        }

        .formbold-form-label-2 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .formbold-form-input {
            width: 100%;
            padding: 12px 24px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            background: white;
            font-weight: 500;
            font-size: 16px;
            color: #6b7280;
            outline: none;
            resize: none;
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-btn {
            text-align: center;
            font-size: 16px;
            border-radius: 6px;
            padding: 14px 32px;
            border: none;
            font-weight: 600;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
        }

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold--mx-3 {
            margin-left: -12px;
            margin-right: -12px;
        }

        .formbold-px-3 {
            padding-left: 12px;
            padding-right: 12px;
        }

        .flex {
            display: flex;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .w-full {
            width: 100%;
        }

        .formbold-radio {
            width: 20px;
            height: 20px;
        }

        .formbold-radio-label {
            font-weight: 500;
            font-size: 16px;
            padding-left: 12px;
            color: #070707;
            padding-right: 20px;
        }

        .main {
            position: relative;
            text-align: center;

        }

        @media (min-width: 540px) {
            .sm\:w-half {
                width: 50%;
            }
        }
    </style>

    <style>
        body {
            /* height: 100vh;
                                                                                justify-content: center;
                                                                                align-items: center;
                                                                                display: flex;
                                                                                background-color: #eee */
        }

        .launch {
            height: 50px
        }

        .close {
            font-size: 21px;
            cursor: pointer
        }

        .modal-body {
            height: 450px
        }

        .nav-tabs {
            border: none !important
        }

        .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #fff;
            border-color: #ffffff #ffffff #fff;
            border-top: 3px solid blue !important
        }

        .nav-tabs .nav-link {
            margin-bottom: -1px;
            border: 1px solid transparent;
            border-top-left-radius: 0rem;
            border-top-right-radius: 0rem;
            border-top: 3px solid #eee;
            font-size: 20px
        }

        .nav-tabs .nav-link:hover {
            border-color: #e9ecef #ffffff #ffffff
        }

        .nav-tabs {
            display: table !important;
            width: 100%
        }

        .nav-item {
            display: table-cell
        }

        .form-control {
            border-bottom: 1px solid #eee !important;
            border: none;
            font-weight: 600
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #8bbafe;
            outline: 0;
            box-shadow: none
        }

        .inputbox {
            position: relative;
            margin-bottom: 20px;
            width: 100%
        }

        .inputbox span {
            position: absolute;
            top: 7px;
            left: 11px;
            transition: 0.5s
        }

        .inputbox i {
            position: absolute;
            top: 13px;
            right: 8px;
            transition: 0.5s;
            color: #3F51B5
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        .inputbox input:focus~span {
            transform: translateX(-0px) translateY(-15px);
            font-size: 12px
        }

        .inputbox input:valid~span {
            transform: translateX(-0px) translateY(-15px);
            font-size: 12px
        }

        .pay button {
            height: 47px;
            border-radius: 37px
        }
    </style> --}}
    {{-- <style>
        .stretch-card>.card {
            width: 100%;
            min-width: 100%;

        }

        body {
            background-color: white;


        }

        .flex {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;


        }

        @media (max-width:991.98px) {
            .padding {
                padding: 1.5rem
            }
        }

        @media (max-width:767.98px) {
            .padding {
                padding: 1rem
            }
        }

        .padding {
            padding: 3rem
        }

        .card {
            box-shadow: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none
        }


        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #3da5f;
            border-radius: 0;
        }

        .card .card-body {
            padding: 1.25rem 1.75rem;
        }

        .card .card-title {
            color: #000000;
            margin-bottom: 0.625rem;
            text-transform: capitalize;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .card .card-description {
            margin-bottom: .875rem;
            font-weight: 400;
            color: #76838f;
        }

        .form-group label {
            font-size: 0.875rem;
            line-height: 1.4rem;
            vertical-align: top;
            margin-bottom: .5rem;
        }

        .form-control {
            border: 1px solid #f3f3f3;
            font-weight: 400;
            font-size: 0.875rem;
        }

        .main {
            position: relative;
        }
    </style> --}}
    <style>
        /* Importing fonts from Google */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        /* Reseting */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            /* background: linear-gradient(45deg, #ce1e53, #8f00c7); */
            min-height: 100vh;

        }

        body::-webkit-scrollbar {
            display: none;
        }

        .wrapper {
            max-width: 800px;
            margin: 80px auto;
            padding: 30px 45px;
            box-shadow: 5px 25px 35px #3535356b;

        }

        .wrapper label {
            display: block;
            padding-bottom: 0.2rem;
        }

        .wrapper .form .row {
            padding: 0.6rem 0;
        }

        .wrapper .form .row .form-control {
            box-shadow: none;
        }

        .wrapper .form .option {
            position: relative;
            padding-left: 20px;
            cursor: pointer;
        }


        .wrapper .form .option input {
            opacity: 0;
        }

        .wrapper .form .checkmark {
            position: absolute;
            top: 1px;
            left: 0;
            height: 20px;
            width: 20px;
            border: 1px solid #bbb;
            border-radius: 50%;
        }

        .wrapper .form .option input:checked~.checkmark:after {
            display: block;
        }

        .wrapper .form .option:hover .checkmark {
            background: #f3f3f3;
        }

        .wrapper .form .option .checkmark:after {
            content: "";
            width: 10px;
            height: 10px;
            display: block;
            background: linear-gradient(45deg, #ce1e53, #8f00c7);
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: 300ms ease-in-out 0s;
        }

        .wrapper .form .option input[type="radio"]:checked~.checkmark {
            background: #fff;
            transition: 300ms ease-in-out 0s;
        }

        .wrapper .form .option input[type="radio"]:checked~.checkmark:after {
            transform: translate(-50%, -50%) scale(1);
        }

        #sub {
            display: block;
            width: 100%;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            color: #333;
        }

        #sub:focus {
            outline: none;
        }

        @media(max-width: 768.5px) {
            .wrapper {
                margin: 30px;
            }

            .wrapper .form .row {
                padding: 0;
            }
        }

        @media(max-width: 400px) {
            .wrapper {
                padding: 25px;
                margin: 20px;
            }
        }
    </style>
    <style>
        .Btn {
            width: 130px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(15, 15, 15);
            border: none;
            color: white;
            font-weight: 600;
            gap: 8px;
            cursor: pointer;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.103);
            position: relative;
            overflow: hidden;
            transition-duration: .3s;
        }

        .svgIcon {
            width: 16px;
        }

        .svgIcon path {
            fill: white;
        }

        .Btn::before {
            width: 130px;
            height: 130px;
            position: absolute;
            content: "";
            background-color: white;
            border-radius: 50%;
            left: -100%;
            top: 0;
            transition-duration: .3s;
            mix-blend-mode: difference;
        }

        .Btn:hover::before {
            transition-duration: .3s;
            transform: translate(100%, -50%);
            border-radius: 0;
        }

        .Btn:active {
            transform: translate(5px, 5px);
            transition-duration: .3s;
        }
    </style>

@section('title')
    Reservation
@endsection
@endsection
@section('body')




<div class="big-posts-area mb-50 "
    style="background-image: url('user/assets/img/bg-img/gallery-1 (1).jpg');height: 900px">
    <div class="container">
        {{-- <div class="col-12">
            <div class="page-content page-container main" style="" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-lg-5 grid-margin stretch-card">
                            <!--form mask starts-->
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Form input mask example</h4>
                                    <form class="forms-sample">

                                        <div class="form-group">
                                            <label>Date with custom placeholder:</label>
                                            <input class="form-control"
                                                data-inputmask="'alias': 'date','placeholder': '*'">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone:</label>
                                            <input class="form-control" id="phone"
                                                data-inputmask="'alias': 'phonebe'">
                                        </div>
                                        <div class="form-group">
                                            <label>Currency:</label>
                                            <input class="form-control" data-inputmask="'alias': 'currency'"
                                                style="text-align: right;">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label>Email:</label>
                                                <input class="form-control" data-inputmask="'alias': 'email'">
                                            </div>
                                            <div class="col">
                                                <label>Ip:</label>
                                                <input class="form-control" data-inputmask="'alias': 'ip'">
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="form-group">
                                                <label>Currency:</label>
                                                <input class="form-control" data-inputmask="'alias': 'currency'"
                                                    style="text-align: right;">
                                            </div>
                                            <div class="form-group">
                                                <label>Currency:</label>
                                                <input class="form-control" data-inputmask="'alias': 'currency'"
                                                    style="text-align: right;">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>Email:</label>
                                                    <input class="form-control" data-inputmask="'alias': 'email'">
                                                </div>
                                                <div class="col">
                                                    <label>Ip:</label>
                                                    <input class="form-control" data-inputmask="'alias': 'ip'">
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--form mask ends-->
                        </div>

                    </div>
                </div>
                <!--form mask ends-->
            </div>
        </div> --}}
        <div class="wrapper items-center rounded bg-white">

            <div class="h3">Reservation </div>
            <div class="form">
                <form role="form" action="{{ route('Add_Reservation') }}" method="post" class="require-validation"
                    data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @csrf
                    {{-- <form action="{{ route('res') }}" method="POST">
                    @csrf --}}
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Full Name</label>
                            <input type="text" name="full_name" placeholder="Full Name" class="form-control"
                                value="{{ old('full_name') }}" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Your Email" class="form-control"
                                value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Number People </label>
                            <input type="number" name="number_people" placeholder="How Many" class="form-control"
                                value="{{ old('number_people') }}" required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Event</label>
                            <select class="form-control" name="event" value="{{ old('event') }}" required>
                                <option value="breakfast">breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="dinner">dinner</option>
                                <option value="party">party</option>
                                <option value="birthday">birthday</option>

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" value="{{ old('date') }}"
                                required>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-3">
                            <label>Time</label>
                            <input type="time" name="time" class="form-control" value="{{ old('time') }}"
                                required>
                        </div>

                    </div>

                    <div class=" my-md-2 my-3">
                        <a style="margin-top: 50px">Payment Details</a>
                        <hr>
                        <img src="{{ asset('user/assets/img/bg-img/payments.png') }}" alt="#" width="400px"
                            height="400px">
                        <div class="row" style="margin-top: 40px">
                            <div class="col-md-6 mt-md-0 mt-3 required">
                                <label>Card Name</label>
                                <input type="text" class="form-control" placeholder="Cart Owner Name"
                                    value="{{ old('cart_name') }}" required>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3 card required">
                                <label>Card Number</label>
                                <input type="text" autocomplete='off' class="form-control  card-number"
                                    maxlength="19" placeholder="4534 5555 5555 5555" value="{{ old('cart_number') }}"
                                    required>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-md-0 mt-3 expiration required">
                                <label>Expiration Year</label>
                                <input type="text" class="form-control card-expiry-year" placeholder="YYYY"
                                    value="{{ old('ex_date') }}" required>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-3 expiration required">
                                <label>Expiration Month</label>
                                <input type="text" placeholder="MM" value="{{ old('ex_date') }}"
                                    class="form-control card-expiry-month" required>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-3 cvc required">
                                <label>CVV</label>
                                <input type="text" autocomplete='off' class="form-control  card-cvc"
                                    placeholder="ex. 311" value="{{ old('cvv') }}" maxlength="3" required>
                            </div>

                        </div>
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide' hidden>
                                <div class='alert-danger alert'>Please correct the errors and
                                    try
                                    again.</div>
                            </div>
                        </div>

                    </div>
                    {{-- <button type="submit" class="btn btn-primary mt-3">Submit</button> --}}
                    {{-- <button class="button" style="--clr: #00ad54;">
                        <span class="button-decor"></span>
                        <div class="button-content">
                            <div class="button__icon">
                                <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    width="24">
                                    <circle opacity="0.5" cx="25" cy="25" r="23"
                                        fill="url(#icon-payments-cat_svg__paint0_linear_1141_21101)"></circle>
                                    <mask id="icon-payments-cat_svg__a" fill="#fff">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z">
                                        </path>
                                    </mask>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z"
                                        fill="#fff"></path>
                                    <path
                                        d="M25.958 20.962l-1.47-1.632 1.47 1.632zm2.067.109l-1.632 1.469 1.632-1.469zm-.109 2.068l-1.469-1.633 1.47 1.633zm-5.154 4.638l-1.469-1.632 1.469 1.632zm-.276 1.841l-1.883 1.13 1.883-1.13zM34.42 15.93l-2.084-.695 2.084.695zm-19.725 6.42l18.568-6.189-1.39-4.167-18.567 6.19 1.389 4.166zm5.265 1.75l-5.12-3.072-2.26 3.766 5.12 3.072 2.26-3.766zm2.072 3.348l5.394-4.854-2.938-3.264-5.394 4.854 2.938 3.264zm5.394-4.854a.732.732 0 01-1.034-.054l3.265-2.938a3.66 3.66 0 00-5.17-.272l2.939 3.265zm-1.034-.054a.732.732 0 01.054-1.034l2.938 3.265a3.66 3.66 0 00.273-5.169l-3.265 2.938zm.054-1.034l-5.154 4.639 2.938 3.264 5.154-4.638-2.938-3.265zm1.023 12.152l-3.101-5.17-3.766 2.26 3.101 5.17 3.766-2.26zm4.867-18.423l-6.189 18.568 4.167 1.389 6.19-18.568-4.168-1.389zm-8.633 20.682c1.61 2.682 5.622 2.241 6.611-.725l-4.167-1.39a.732.732 0 011.322-.144l-3.766 2.26zm-6.003-8.05a3.66 3.66 0 004.332-.419l-2.938-3.264a.732.732 0 01.866-.084l-2.26 3.766zm3.592-1.722a3.66 3.66 0 00-.69 4.603l3.766-2.26c.18.301.122.687-.138.921l-2.938-3.264zm11.97-9.984a.732.732 0 01-.925-.926l4.166 1.389c.954-2.861-1.768-5.583-4.63-4.63l1.39 4.167zm-19.956 2.022c-2.967.99-3.407 5.003-.726 6.611l2.26-3.766a.732.732 0 01-.145 1.322l-1.39-4.167z"
                                        fill="#fff" mask="url(#icon-payments-cat_svg__a)"></path>
                                    <defs>
                                        <linearGradient id="icon-payments-cat_svg__paint0_linear_1141_21101"
                                            x1="25" y1="2" x2="25" y2="48"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" stop-opacity="0.71"></stop>
                                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <span class="button__text">Payments</span>
                        </div>
                    </button> --}}
                    <button class="Btn" type="submit">
                        Pay
                        <svg class="svgIcon" viewBox="0 0 576 512">
                            <path
                                d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                            </path>
                        </svg>
                    </button>
                </form>
            </div>

        </div>



        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="big-post-content text-center mb-50">
                    <div class="main">

                        <div class="">
                            {{-- <div class="py-12">
                                <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg md:max-w-xl mx-2">
                                    <div class="md:flex ">
                                        <div class="w-full p-4 px-5 py-5">
                                            <div class="flex flex-row">
                                                <h2 class="text-3xl font-semibold">Athletic</h2>
                                                <h2 class="text-3xl text-green-400 font-semibold">Greens</h2>
                                            </div>

                                            <div class="relative pb-5">

                                                </span> </div> <span>Shipping Address</span>
                                            <input type="text" name="mail"
                                                class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm"
                                                placeholder="Company (optional)"> <input type="text" name="mail"
                                                class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm"
                                                placeholder="Address*"> <input type="text" name="mail"
                                                class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm"
                                                placeholder="Apartment, suite, etc. (optional)">
                                            <div class="grid md:grid-cols-2 md:gap-2"> <input type="text"
                                                    name="mail"
                                                    class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm"
                                                    placeholder="First name*"> <input type="text" name="mail"
                                                    class="border rounded h-10 w-full focus:outline-none focus:border-green-200 px-2 mt-2 text-sm"
                                                    placeholder="Last name*"> </div>
                                            <div class="grid md:grid-cols-3 md:gap-2">

                                                <div class="flex justify-between  pt-4" style="">
                                                    <button type="submit"
                                                        class="h-12 w-48 rounded font-medium text-xs bg-blue-500 text-white">Continue
                                                        to Shipping</button>
                                                </div>
                                                <div class="flex justify-between  pt-4" style="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <h5 style="color: white;margin-top: 100px ;margin-left:200px ">
                            Online reservations are available for lunch and dinner. For parties of 7 guests or more,
                            private dining room hire, or for our Weekend Brunch, please contact our reservations team
                            directly between the hours of 10am to 8pm
                            Zuma has a smart elegant dress code; shorts, flip flops, or sportswear are not permitted in
                            the restaurant.
                        </h5>
                        <a class="btn bueno-btn" style="color: white;margin-top: 200px;margin-left: 450px">Book a
                            Table</a> --}}







                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    {{-- <div class="row align-items-center">
    <div class="col-12 col-md-6">
        <div class="big-post-content text-center mb-50">

            <form action="https://formbold.com/s/FORM_ID" method="POST">
                <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <label for="fName" class="formbold-form-label"> First Name </label>
                            <input type="text" name="fName" id="fName" placeholder="First Name"
                                class="formbold-form-input" />
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <label for="lName" class="formbold-form-label"> Last Name </label>
                            <input type="text" name="lName" id="lName" placeholder="Last Name"
                                class="formbold-form-input" />
                        </div>
                    </div>
                </div>

                <div class="formbold-mb-5">
                    <label for="guest" class="formbold-form-label">
                        How many guest are you bringing?
                    </label>
                    <input type="number" name="guest" id="guest" placeholder="5" class="formbold-form-input" />
                </div>

                <div class="flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5 w-full">
                            <label for="date" class="formbold-form-label"> Date </label>
                            <input type="date" name="date" id="date" class="formbold-form-input" />
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="formbold-mb-5">
                            <label for="time" class="formbold-form-label"> Time </label>
                            <input type="time" name="time" id="time" class="formbold-form-input" />
                        </div>
                    </div>
                </div>

                <div class="flex formbold-mb-5">

                    <button type="button" class="btn btn-primary launch" data-toggle="modal"
                        data-target="#staticBackdrop">
                        <i class="fa fa-rocket"></i> Pay Now
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i>
                                    </div>
                                    <div class="tabs mt-3">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation"> <a class="nav-link active"
                                                    id="visa-tab" data-toggle="tab" href="#visa" role="tab"
                                                    aria-controls="visa" aria-selected="true"> <img
                                                        src="{{ asset('user/assets/img/bg-img/undefined - Imgur.png') }}"
                                                        width="80"> </a> </li>
                                            <li class="nav-item" role="presentation"> <a class="nav-link"
                                                    id="paypal-tab" data-toggle="tab" href="#paypal" role="tab"
                                                    aria-controls="paypal" aria-selected="false"> <img
                                                        src="{{ asset('user/assets/img/bg-img/undefined - Imgur (1).png') }}"
                                                        width="80"> </a> </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="visa" role="tabpanel"
                                                aria-labelledby="visa-tab">
                                                <div class="mt-4 mx-4">
                                                    <div class="text-center">
                                                        <h5>Credit card</h5>
                                                    </div>
                                                    <div class="form mt-3">
                                                        <div class="inputbox"> <input type="text" name="name"
                                                                class="form-control" required="required">
                                                            <span>Cardholder
                                                                Name</span>
                                                        </div>
                                                        <div class="inputbox"> <input type="text" name="name"
                                                                min="1" max="999" class="form-control"
                                                                required="required"> <span>Card
                                                                Number</span> <i class="fa fa-eye"></i>
                                                        </div>
                                                        <div class="d-flex flex-row">
                                                            <div class="inputbox"> <input type="text"
                                                                    name="name" min="1" max="999"
                                                                    class="form-control" required="required">
                                                                <span>Expiration
                                                                    Date</span>
                                                            </div>
                                                            <div class="inputbox"> <input type="text"
                                                                    name="name" min="1" max="999"
                                                                    class="form-control" required="required">
                                                                <span>CVV</span>
                                                            </div>
                                                        </div>
                                                        <div class="px-5 pay"> <button
                                                                class="btn btn-success btn-block">Add
                                                                card</button> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="paypal" role="tabpanel"
                                                aria-labelledby="paypal-tab">
                                                <div class="px-5 mt-5">
                                                    <div class="inputbox"> <input type="text" name="name"
                                                            class="form-control" required="required"> <span>Paypal
                                                            Email
                                                            Address</span> </div>
                                                    <div class="pay px-5"> <button
                                                            class="btn btn-primary btn-block">Add
                                                            paypal</button> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <button class="formbold-btn">Submit</button>
                </div>
            </form>


        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="big-post-thumbnail mb-50">
        </div>
    </div>
</div> --}}





    <script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.js'></script>
    <script type='text/javascript'
        src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script>
        $(document).ready(function() {
            $(":input").inputmask();



            $("#phone").inputmask({
                mask: '999 999 9999',
                placeholder: ' ',
                showMaskOnHover: false,
                showMaskOnFocus: false,
                onBeforePaste: function(pastedValue, opts) {
                    var processedValue = pastedValue;

                    //do something with it

                    return processedValue;
                }
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.attr('hidden', false);
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .attr('hidden', false)
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
@endsection
@section('js')
@endsection
