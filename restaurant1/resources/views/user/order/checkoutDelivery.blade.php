@extends('user.master')
@section('css')
    <style>
        .stretch-card>.card {
            width: 180%;
            min-width: 100%;
        }

        body {
            background-color: white;
        }

        .flex {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
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
            background-color: #e9eded;
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
    </style>
    <style>
        body {
            background: linear-gradient(110deg, #BBDEFB 60%, 60%);
        }

        .shop {
            font-size: 10px;
        }

        .space {
            letter-spacing: 0.8px !important;
        }

        .second a:hover {
            color: rgb(92, 92, 92);
        }

        .active-2 {
            color: rgb(92, 92, 92)
        }


        .breadcrumb>li+li:before {
            content: "" !important
        }

        .breadcrumb {
            padding: 0px;
            font-size: 10px;
            color: #aaa !important;
        }

        .first {
            background-color: white;
        }

        a {
            text-decoration: none !important;
            color: #aaa;
        }

        .btn-lg,
        .form-control-sm:focus,
        .form-control-sm:active,
        a:focus,
        a:active {
            outline: none !important;
            box-shadow: none !important
        }

        .form-control-sm:focus {
            border: 1.5px solid #4bb8a9;
        }

        .btn-group-lg>.btn,
        .btn-lg {
            padding: .5rem 0.1rem;
            font-size: 1rem;
            border-radius: 0;
            color: white !important;
            background-color: #4bb8a9;
            height: 2.8rem !important;
            border-radius: 0.2rem !important;
        }

        .btn-group-lg>.btn:hover,
        .btn-lg:hover {
            background-color: #26A69A;
        }

        .btn-outline-primary {
            background-color: #fff !important;
            color: #4bb8a9 !important;
            border-radius: 0.2rem !important;
            border: 1px solid #4bb8a9;
        }

        .btn-outline-primary:hover {
            background-color: #4bb8a9 !important;
            color: #fff !important;
            border: 1px solid #4bb8a9;
        }

        .card-2 {
            margin-top: 40px !important;
        }

        .card-header {
            background-color: #e9eded;
            border-bottom: 0px solid #aaaa !important;
        }

        p {
            font-size: 13px;
        }

        .small {
            font-size: 9px !important;
        }

        .form-control-sm {
            height: calc(2.2em + .5rem + 2px);
            font-size: .875rem;
            line-height: 1.5;
            border-radius: 0;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .boxed {
            padding: 0px 8px 0 8px;
            background-color: #4bb8a9;
            color: white;
        }

        .boxed-1 {
            padding: 0px 8px 0 8px;
            color: black !important;
            border: 1px solid #aaaa;
        }

        .bell {
            opacity: 0.5;
            cursor: pointer;
        }

        @media (max-width: 767px) {
            .breadcrumb-item+.breadcrumb-item {
                padding-left: 0
            }
        }
    </style>
@endsection
@section('title')
@endsection
@section('body')
    <form action="{{ route('Store_Order_Delivery') }}" method="post">
        @csrf

        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-lg-5 grid-margin stretch-card">
                        <!--form mask starts-->
                        <div class="card">
                            <div class="card-body">
                                <h2 style="margin-bottom: 40px" class="card-title">Checkout</h2>
                                {{-- <p class="card-description">Take a preview of input mask format</p> --}}

                                <div class="form-group row">
                                    <div class="col">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" name="fname"
                                            placeholder="Your First Name" data-inputmask="'alias': 'date'"
                                            value="{{ old('fname') }}" required>
                                    </div>
                                    <div class="col">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" name="lname"
                                            placeholder="Your Last Name" data-inputmask="'alias': 'datetime'"
                                            value="{{ old('lname') }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Email</label>
                                        <input class="form-control" type="email" placeholder="example@gmail.com"
                                            name="email" data-inputmask="'alias': 'date'" value="{{ old('email') }}"
                                            required>
                                    </div>
                                    <div class="col">
                                        <label>Phone</label>
                                        <input class="form-control" maxlength="17" pattern="\d{17}" minlength="10"
                                            type="number" name="phone" placeholder="0963-567-890"
                                            data-inputmask="'alias': 'datetime' " value="{{ old('phone') }}" required>
                                    </div>
                                    {{-- maxlength="15" pattern="\d{15}"  --}}
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Address</label>
                                        <input class="form-control" placeholder="1234 Main St" name="address" type="text"
                                            data-inputmask="'alias': 'date'" value="{{ old('address') }}" required>
                                    </div>
                                    <div class="col">
                                        <label>Address2 (optional)</label>
                                        <input class="form-control" placeholder="Apartment or suite" type="text"
                                            name="address2" data-inputmask="'alias': 'datetime'"
                                            value="{{ old('address2') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 mb-4">
                                        <p class="mb-0">
                                            Country
                                        </p>
                                        <div class="form-outline mb-4">
                                            <input type="text" class="form-control" placeholder="United States"
                                                aria-label="United States" aria-describedby="basic-addon1" name="country"
                                                value="{{ old('country') }}" required />
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 mb-4">
                                        <p class="mb-0">
                                            State
                                        </p>
                                        <div class="form-outline mb-4">
                                            <input type="text" class="form-control" placeholder="California"
                                                aria-label="California" aria-describedby="basic-addon1" name="state"
                                                value="{{ old('state') }}" required />
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 mb-4">
                                        <p class="mb-0">
                                            Zip
                                        </p>
                                        <div class="form-outline">
                                            <input type="number" placeholder="27500" class="form-control" name="zip"
                                                minlength="5" pattern="\d{5}" maxlength="5" pattern="\d{5}"
                                                value="{{ old('zip') }}" required />
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4">
                                    <p class="mb-0">
                                        Info
                                    </p>
                                    <div class="form-outline">
                                        <textarea type="text" style="width: 700px;height: 150px;" placeholder="any notes" class="form-control" name="info"
                                            maxlength="400" pattern="\d{400}" value="" required>{{ old('info') }}</textarea>
                                    </div>
                                </div>







                            </div>
                        </div>
                        <!--form mask ends-->
                    </div>

                </div>
            </div>
            <!--form mask ends-->
        </div>

        <div class=" container-fluid my-5 ">
            <div class="row justify-content-center ">
                <div class="col-xl-7">
                    <div class="card shadow-lg ">
                        <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                            <div class="col">
                                <p class="text-muted mb-2" style="margin-bottom: 40px"></p>

                                <!-- <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label><br> -->
                                <br>
                            </div>


                        </div>


                        <div class="row justify-content-around">
                            {{-- <div class="col-md-5">
                        <div class="card border-0">
                            <div class="card-header pb-0">
                                <h2 class="card-title space ">Checkout</h2>
                                <p class="card-text text-muted mt-4  space">Cash On Delivery</p>
                                <hr class="my-0">
                            </div>

                            <form-group>
                                <div class="card-body">






                                </div>
                            </form-group>
                        </div>
                    </div> --}}
                            <div class="col-md-7">
                                <div class="card border-0 ">
                                    <div class="card-header card-2">
                                        <p class="card-text text-muted mt-md-4  mb-2 space">
                                            YOUR ORDER <span class=" small text-muted ml-2 cursor-pointer">
                                            </span> </p>
                                        <hr class="my-2">
                                    </div>
                                    <div class="card-body pt-0">
                                        @foreach ($menu_in_checkout as $cart)
                                            <div class="row  justify-content-between">
                                                <div class="col-auto col-md-7">
                                                    <div class="media flex-column flex-sm-row">
                                                        <img class=" img-fluid"
                                                            src="{{ Storage::url($cart->menu->image) }}" width="62"
                                                            height="62">
                                                        <div class="media-body  my-auto">
                                                            <div class="row ">
                                                                <div class="col-auto" style="margin-left: 10px">
                                                                    <p class="mb-0"><b>{{ $cart->menu->name }}</b></p>
                                                                    <small class="text-muted">

                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" pl-0 flex-sm-col col-auto  my-auto">
                                                    <p class="boxed-1">{{ $cart->qty }}</p>
                                                </div>
                                                <div class=" pl-0 flex-sm-col col-auto  my-auto ">
                                                    <p><b>${{ $cart->amount }}</b></p>
                                                </div>
                                            </div>
                                            <hr class="my-2">
                                        @endforeach


                                        <div class="row ">
                                            <div class="col">
                                                <div class="row justify-content-between">
                                                    <div class="col-4">
                                                        <p class="mb-1">
                                                            <b>Subtotal</b>
                                                        </p>
                                                    </div>
                                                    <div class="flex-sm-col col-auto">
                                                        <p class="mb-1" data-price="{{ Helper::totalCartAmount() }}">
                                                            <b>{{ number_format(Helper::totalCartAmount()) }}</b>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="row justify-content-between">
                                                    <div class="col-4">
                                                        <p class="mb-1">
                                                            <b>Tax</b>
                                                        </p>
                                                    </div>
                                                    <div class="flex-sm-col col-auto">
                                                        <p class="mb-1" data-price="{{ Helper::totalCartAmount() }}">
                                                            <b>{{ (10 / 100) * Helper::totalCartAmount() }}</b>
                                                        </p>
                                                    </div>
                                                </div>


                                                @if (session()->has('coubon'))
                                                    <div class="row justify-content-between">
                                                        @if (Session::get('coubon')['type'] == 'percent')
                                                            <div class="col">
                                                                <p class="mb-1"><b>
                                                                        {{ number_format(Session::get('coubon')['valuee']) }}%
                                                                        OFF</b>
                                                                </p>
                                                            </div>
                                                        @else
                                                            <div class="col">
                                                                <p class="mb-1"><b>
                                                                        ${{ number_format(Session::get('coubon')['valuee']) }}
                                                                        OFF
                                                                    </b></p>
                                                            </div>
                                                        @endif

                                                        <div class="flex-sm-col col-auto">
                                                            <p class="mb-1"><b
                                                                    data-price="{{ Session::get('coubon')['value'] }}">
                                                                    ${{ number_format(Session::get('coubon')['value']) }}</b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endif


                                                @php
                                                    $tax = (10 / 100) * Helper::totalCartAmount();
                                                    $total = Helper::totalCartAmount() + $tax;
                                                    if (session()->has('coubon')) {
                                                        $total = $total - Session::get('coubon')['value'];
                                                    }
                                                @endphp

                                                @if (session()->has('coubon'))
                                                    <hr class="my-0">
                                                    <div class="row justify-content-between">
                                                        <div class="col-4">
                                                            <p class="mb-1"><b>Total</b></p>
                                                        </div>
                                                        <div class="flex-sm-col col-auto">
                                                            <p class="mb-1"><b>${{ number_format($total) }}</b></p>
                                                        </div>
                                                    </div>
                                                @else
                                                    <hr class="my-0">
                                                    <div class="row justify-content-between">
                                                        <div class="col-4">
                                                            <p class="mb-1"><b>Total</b></p>
                                                        </div>
                                                        <div class="flex-sm-col col-auto">
                                                            <p class="mb-1"><b>${{ number_format($total) }}</b></p>
                                                        </div>
                                                    </div>
                                                @endif


                                                <div>



                                                    @php
                                                        $tax = (10 / 100) * Helper::totalCartAmount();
                                                        $total = Helper::totalCartAmount() + $tax;
                                                        if (session()->has('coubon')) {
                                                            $total = $total - Session::get('coubon')['value'];
                                                        }
                                                    @endphp

                                                    <div class="row mb-md-5" style="margin-top: 20px">
                                                        <div class="col">
                                                            @if (session()->has('coubon'))
                                                                <button type="submit" name="" id=""
                                                                    class="btn  btn-lg btn-block ">
                                                                    Pay Now ${{ number_format($total) }}
                                                                </button>
                                                            @else
                                                                <button type="submit" name="" id=""
                                                                    class="btn  btn-lg btn-block ">
                                                                    Continues ${{ number_format($total) }}
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('js')
@endsection
