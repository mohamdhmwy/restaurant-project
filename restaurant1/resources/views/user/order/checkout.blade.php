@extends('user.master')

@section('css')
@section('title')
    checkout
@endsection


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





@section('body')



{{-- @if (Session::has('success'))
    <div class="alert alert-success text-center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p>{{ Session::get('success') }}</p>
    </div>
@endif --}}
{{-- <form action="{{ route('orderuser.store') }}" method="POST">
    @csrf --}}
<form role="form" action="{{ route('orderuser.store') }}" method="post" class="require-validation"
    data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
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
                                    <input class="form-control" type="text" name="fname" placeholder="Your First Name"
                                        data-inputmask="'alias': 'date'" value="{{ old('fname') }}" required>
                                </div>
                                <div class="col">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="lname" placeholder="Your Last Name"
                                        data-inputmask="'alias': 'datetime'" value="{{ old('lname') }}" required>
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
                                    <textarea type="text" style="width: 700px;height: 150px;" placeholder="any notes" class="form-control"
                                        name="info" maxlength="400" pattern="\d{400}" value="" required>{{ old('info') }}</textarea>
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
            <div class="col-xl-10">
                <div class="card shadow-lg ">
                    <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                        <div class="col">
                            <p class="text-muted mb-2" style="margin-bottom: 40px"></p>

                            <!-- <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label><br> -->
                            <br>
                        </div>


                    </div>


                    <div class="row justify-content-around">
                        <div class="col-md-5">
                            <div class="card border-0">
                                <div class="card-header pb-0">
                                    <h2 class="card-title space ">Checkout</h2>
                                    <p class="card-text text-muted mt-4  space">Payment Method</p>
                                    <hr class="my-0">
                                </div>

                                <form-group>
                                    <div class="card-body">
                                        <div class=" justify-content-between">
                                            {{-- <div class="col-auto mt-0">
                                                <p><b><input name="payment_method" type="radio"
                                                            value="Cash_On_Delivery" required> <label>
                                                            Cash On Delivery</label><br></b></p>
                                            </div> --}}

                                            <div class="col-auto" style="margin-bottom: 20px">
                                                <p><b><input name="payment_method" id="Card_Payment" type="radio"
                                                            value="Card_Payment"
                                                            style="margin-top: 10px;margin-bottom: 10px" required hidden checked>
                                                        <label>
                                                            Card Payment</label></b> </p>
                                                <img src="{{ asset('user/assets/img/bg-img/payments.png') }}"
                                                    alt="#" width="400px" height="400px">

                                            </div>
                                        </div>


                                        <div>

                                            <div id="creditCardDetails" >
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <p class="text-muted mb-2">PAYMENT DETAILS</p>
                                                        <hr class="mt-0">
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label for="NAME" class="small text-muted mb-1">NAME ON
                                                        CARD</label>
                                                    <input type="text" class="form-control "
                                                        placeholder="Cart Owner Name" value="{{ old('cart_name') }}">
                                                </div>
                                                <div class="form-group card required">
                                                    <label for="NAME" class="small text-muted mb-1">CARD
                                                        NUMBER</label>
                                                    <input type="text" autocomplete='off'
                                                        class="form-control form-control-sm card-number"
                                                        maxlength="19" placeholder="4534 5555 5555 5555"
                                                        value="{{ old('cart_number') }}">
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-sm-6 pr-sm-2">
                                                        <div class="form-group expiration required">
                                                            <label for="NAME" class="small text-muted mb-1">
                                                                Expiration Year</label>
                                                            <input type="text"
                                                                class="form-control form-control-sm card-expiry-year"
                                                                size="4" placeholder="YYYY"
                                                                value="{{ old('ex_date') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 pr-sm-2">
                                                        <div class="form-group expiration required">
                                                            <label for="NAME" class="small text-muted mb-1">
                                                                Expiration Month</label>
                                                            <input type="text"
                                                                class="form-control form-control-sm card-expiry-month"
                                                                size="2" placeholder="MM"
                                                                value="{{ old('ex_date') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group cvc required">
                                                            <label for="NAME" class="small text-muted mb-1">CVV
                                                                CODE</label>
                                                            <input type="text" autocomplete='off'
                                                                class="form-control form-control-sm card-cvc"
                                                                size="4" placeholder="ex. 311"
                                                                value="{{ old('cvv') }}" maxlength="3">
                                                        </div>
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

                                            @php
                                                $tax = (10 / 100) * Helper::totalCartAmount();
                                                $total = Helper::totalCartAmount() + $tax;
                                                if (session()->has('coubon')) {
                                                    $total = $total - Session::get('coubon')['value'];
                                                }
                                            @endphp

                                            <div class="row mb-md-5">
                                                <div class="col">
                                                    @if (session()->has('coubon'))
                                                        <button type="submit" name="" id=""
                                                            class="btn  btn-lg btn-block ">
                                                            Pay Now ${{ number_format($total) }}
                                                        </button>
                                                    @else
                                                        <button type="submit" name="" id=""
                                                            class="btn  btn-lg btn-block ">
                                                            Pay Now ${{ number_format($total) }}
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                        {{-- <div>
                                            <div id="creditCardDetails">
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <p class="text-muted mb-2">PAYMENT DETAILS</p>
                                                        <hr class="mt-0">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="NAME" class="small text-muted mb-1">NAME ON
                                                        CARD</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="cart_name" id="cart_name" aria-describedby="helpId"
                                                        placeholder="Cart Owner Name" value="{{ old('cart_name') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="NAME" class="small text-muted mb-1">CARD
                                                        NUMBER</label>
                                                    <input type="number" class="form-control form-control-sm"
                                                        name="cart_number" id="NAME" aria-describedby="helpId"
                                                        maxlength="16" pattern="\d{16}"
                                                        placeholder="4534 5555 5555 5555"
                                                        value="{{ old('cart_number') }}">
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col-sm-6 pr-sm-2">
                                                        <div class="form-group">
                                                            <label for="NAME" class="small text-muted mb-1">VALID
                                                                THROUGH</label>
                                                            <input type="date" class="form-control form-control-sm"
                                                                name="ex_date" id="NAME" maxlength="10"
                                                                pattern="\d{10}" aria-describedby="helpId"
                                                                placeholder="MM/YY" value="{{ old('ex_date') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="NAME" class="small text-muted mb-1">CVV
                                                                CODE</label>
                                                            <input type="number" class="form-control form-control-sm"
                                                                name="cvv" id="NAME" maxlength="3"
                                                                pattern="\d{3}" aria-describedby="helpId"
                                                                placeholder="000" value="{{ old('cvv') }}">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            @php
                                                $tax = (10 / 100) * Helper::totalCartAmount();
                                                $total = Helper::totalCartAmount() + $tax;
                                                if (session()->has('coubon')) {
                                                    $total = $total - Session::get('coubon')['value'];
                                                }
                                            @endphp
                                            <div class="row mb-md-5">
                                                <div class="col">
                                                    @if (session()->has('coubon'))
                                                        <button type="submit" name="" id=""
                                                            class="btn  btn-lg btn-block ">
                                                            PURCHASE ${{ number_format($total) }}
                                                        </button>
                                                    @else
                                                        <button type="submit" name="" id=""
                                                            class="btn  btn-lg btn-block ">
                                                            PURCHASE ${{ number_format($total) }}
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                </form-group>
                            </div>
                        </div>
                        <div class="col-md-5">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
{{-- <script>
    $(document).ready(function() {
        $('input[name="payment_method"]').change(function() {
            if ($(this).val() === 'Card_Payment') {
                $('#payment-form').attr('class', 'require-validation');
            } else {
                $('#payment-form').removeAttr('class');
            }
        });
    });
</script> --}}

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




<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script>
    $(document).ready(function() {
        $('input[name="payment_method"]').change(function() {
            if ($(this).val() === 'Card_Payment') {
                $('#creditCardDetails').attr('hidden', false);
                $('#creditCardDetails input').attr('required', true); // Add required attribute
            } else {
                $('#creditCardDetails').attr('hidden', true);
                $('#creditCardDetails input').removeAttr('required'); // Remove required attribute
            }
        });
    });
</script>

{{-- <script>
    $(document).ready(function() {
        $('input[name="payment_method"]').change(function() {
            if ($(this).val() === 'PayPal') {
                $('#PayPalDetails').attr('hidden', false);
                $('#PayPalDetails input').attr('required', true); // Add required attribute
            } else {
                $('#PayPalDetails').attr('hidden', true);
                $('#PayPalDetails input').removeAttr('required'); // Remove required attribute
            }
        });
    });
</script> --}}





<script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.js'></script>
<script type='text/javascript'
    src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
@endsection





@section('js')
{{-- <script>
    $(document).ready(function() {
        $('input[name="payment_method"]').change(function() {
            if ($(this).val() === 'PayPal') {
                $('#PayPalDetails').show();
                $('#PayPalDetails a').attr('required', true); // Add required attribute
            } else {
                $('#PayPalDetails').hide();
                $('#PayPalDetails a').removeAttr('required'); // Remove required attribute
            }
        });
    });
</script> --}}
@endsection
