@extends('user.master')

@section('css')
@section('title')
    Cart
@endsection

<style>
    body {
        /* background: #eecda3;
        background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
        background: linear-gradient(to right, #eecda3, #ef629f); */
        min-height: 100vh;
    }
</style>
<style>
    .number-control {
        display: flex;
        align-items: center;
        margin-left: 100px
    }

    .number-left::before,
    .number-right::after {
        content: attr(data-content);
        background-color: #333333;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid black;
        width: 20px;
        color: white;
        transition: background-color 0.3s;
        cursor: pointer;
    }

    .number-left::before {
        content: "-";
    }

    .number-right::after {
        content: "+";
    }

    .number-quantity {
        padding: 0.25rem;
        border: 0;
        width: 50px;
        -moz-appearance: textfield;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
    }

    .number-left:hover::before,
    .number-right:hover::after {
        background-color: #666666;
    }
</style>
{{-- <style>
    @import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');

    /* body {
        font-family: 'Rubik', sans-serif;
        background: #eee;
    } */

    /* .container {
        margin-top: 270px !important;
    } */

    button {
        font-size: calc(12px + (16 - 12) * ((100vw - 360px) / (1600 - 300))) !important;
    }

    p {
        font-size: calc(13px + (16 - 13) * ((100vw - 360px) / (1600 - 300))) !important;
    }


    button:focus {
        box-shadow: none !important;
        outline-width: 0;
    }

    .card {
        border-radius: 12px;
        width: calc(500px + 10 * ((100vw - 320px) / 680));
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.8);
    }

    .card-header {
        border-radius: 12px !important;
    }

    .modal-body .btn-danger {
        border-radius: 11px;
        box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);
    }

    .btn-light {
        background: transparent !important;
        border: 0px !important;
    }

    .btn-light:hover {
        border-color: #fff !important;
    }

    .btn-light:active {
        border-color: #fff !important;
    }

    @media (max-width: 526px) {
        .card {
            width: unset;
        }
    }

    span {
        font-size: 30px !important;
    }

    .modal-content {
        background: transparent !important;
    }
</style> --}}
{{-- <style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope&display=swap');

    /* html,
    body {
        height: 100%;
    } */

    * {
        padding: 0px;
        margin: 0px;
    }

    /* body {
        background-color: #dde3fb;
        display: grid;
        place-items: center;

    } */

    .card {
        background-color: #222222;
        border-radius: 10px;
        font-family: 'Manrope', sans-serif;
    }

    p {
        color: #858585;
        color: #b9b8b8;
        font-size: 15px
    }

    .btn {
        border-radius: 7px;
        font-size: 0.78rem;
    }

    .btn:focus {
        outline: none;
        box-shadow: none;
    }

    *:focus {
        outline: none;
    }
</style> --}}
<style>
    .card {
        border: none;
        height: 40%;
    }

    .card p {
        font-size: 17px;
        font-weight: 400;
        line-height: 20px;
        color: #666;
    }

    .card p.small {
        font-size: 14px;
    }

    .go-corner {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        width: 32px;
        height: 32px;
        overflow: hidden;
        top: 0;
        right: 0;
        background-color: #00838d;
        border-radius: 0 4px 0 32px;
    }

    .go-arrow {
        margin-top: -4px;
        margin-right: -4px;
        color: white;
        font-family: courier, sans;
    }

    .card1 {
        display: block;
        position: relative;
        max-width: 262px;
        background-color: #f2f8f9;
        border-radius: 4px;
        padding: 32px 24px;
        margin: 12px;
        text-decoration: none;
        z-index: 0;
        overflow: hidden;
    }

    .card1:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: -16px;
        right: -16px;
        background: #00838d;
        height: 32px;
        width: 32px;
        border-radius: 32px;
        transform: scale(1);
        transform-origin: 50% 50%;
        transition: transform 0.25s ease-out;
    }

    .card1:hover:before {
        transform: scale(21);
    }

    .card1:hover p {
        transition: all 0.3s ease-out;
        color: rgba(255, 255, 255, 0.8);
    }

    .card1:hover h3 {
        transition: all 0.3s ease-out;
        color: #fff;
    }

    .card2 {
        display: block;
        top: 0px;
        position: relative;
        max-width: 262px;
        background-color: #f2f8f9;
        border-radius: 4px;
        padding: 32px 24px;
        margin: 12px;
        text-decoration: none;
        z-index: 0;
        overflow: hidden;
        border: 1px solid #f2f8f9;
    }

    .card2:hover {
        transition: all 0.2s ease-out;
        box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
        top: -4px;
        border: 1px solid #ccc;
        background-color: white;
    }

    .card2:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: -16px;
        right: -16px;
        background: #00838d;
        height: 32px;
        width: 32px;
        border-radius: 32px;
        transform: scale(2);
        transform-origin: 50% 50%;
        transition: transform 0.15s ease-out;
    }

    .card2:hover:before {
        transform: scale(2.15);
    }

    .card3 {
        display: block;
        top: 0px;
        position: relative;
        max-width: 262px;
        background-color: #f2f8f9;
        border-radius: 4px;
        padding: 32px 24px;
        margin: 12px;
        text-decoration: none;
        overflow: hidden;
        border: 1px solid #f2f8f9;
    }

    .card3 .go-corner {
        opacity: 0.7;
    }

    .card3:hover {
        border: 1px solid #00838d;
        box-shadow: 0px 0px 999px 999px rgba(255, 255, 255, 0.5);
        z-index: 500;
    }

    .card3:hover p {
        color: #00838d;
    }

    .card3:hover .go-corner {
        transition: opactiy 0.3s linear;
        opacity: 1;
    }

    .card4 {
        display: block;
        top: 0px;
        position: relative;
        max-width: 262px;
        background-color: #fff;
        border-radius: 4px;
        padding: 32px 24px;
        margin: 12px;
        text-decoration: none;
        overflow: hidden;
        border: 1px solid #ccc;
    }

    .card4 .go-corner {
        background-color: #00838d;
        height: 100%;
        width: 16px;
        padding-right: 9px;
        border-radius: 0;
        transform: skew(6deg);
        margin-right: -36px;
        align-items: start;
        background-image: linear-gradient(-45deg, #8f479a 1%, #dc2a74 100%);
    }

    .card4 .go-arrow {
        transform: skew(-6deg);
        margin-left: -2px;
        margin-top: 9px;
        opacity: 0;
    }

    .card4:hover {
        border: 1px solid #cd3d73;
    }

    .card4 h3 {
        margin-top: 8px;
    }

    .card4:hover .go-corner {
        margin-right: -12px;
    }

    .card4:hover .go-arrow {
        opacity: 1;
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
@endsection
@section('body')
@if ($NoProductInCart > '0')
    <div class="px-4 px-lg-0">
        <!-- For demo purpose -->
        <div class="bueno-search-area section-padding-95-0 pb-70 bg-img"
            style="background-image: url({{ asset('user/assets/img/core-img/pattern.png') }}); ">
            <div class="container text-white py-5 text-center">
                <h1 class="display-4" style="margin-top: 40px"> cart</h1>
                <p class="lead mb-0"> </p>

            </div>
        </div>
        <!-- End -->

        <div class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

                        <!-- Shopping cart table -->
                        <div class="table-responsive" style="max-width: 1300px">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="p-2 px-3 text-uppercase">Product</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Price</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase" style="margin-left: 100px">Quantity</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Tolat</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Update</div>
                                        </th>
                                        <th scope="col" class="border-0 bg-light">
                                            <div class="py-2 text-uppercase">Remove</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $cart)
                                        <form action="{{ route('update_cart') }}" method="post">
                                            @csrf
                                            <tr>
                                                <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                                                <th scope="row" class="border-0">
                                                    <div class="p-2">
                                                        <img src="{{ Storage::url($cart->menu->image) }}" alt=""
                                                            width="70" class="img-fluid rounded shadow-sm">
                                                        <div class="ml-3 d-inline-block align-middle">
                                                            <h5 class="mb-0"> <a href="#"
                                                                    class="text-dark d-inline-block align-middle">{{ $cart->menu->name }}
                                                                </a></h5>
                                                            <span
                                                                class="text-muted font-weight-normal font-italic d-block">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="border-0 align-middle">
                                                    <strong>${{ $cart->menu->price }}</strong>
                                                </td>
                                                <td class="border-0 align-middle">
                                                    <div class="number-control">
                                                        <div onclick="this.parentNode.querySelector('input[type=number]').stepDown();"
                                                            class="number-left">
                                                        </div>

                                                        <input type="number" min="1" value="{{ $cart->qty }}"
                                                            readonly name="qty" id="qty"
                                                            class="number-quantity">

                                                        <div onclick="this.parentNode.querySelector('input[type=number]').stepUp();"
                                                            class="number-right"></div>
                                                    </div>
                                                </td>
                                                <td class="border-0 align-middle"><strong>${{ $cart->amount }}</strong>
                                                </td>
                                                <td class="border-0 align-middle">

                                                    <button class="btn btn-success " type="submit">

                                                        <svg class="w-6 h-6 text-gray-800 dark:text-white"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" fill="none"
                                                            viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4" />
                                                        </svg>

                                                    </button>

                                                </td>
                                        </form>
                                        <td class="border-0 align-middle">
                                            @include('user.cart.deletecart', [
                                                'routes' => 'deletecart',
                                                'data' => $cart,
                                                'type' => 'cart',
                                            ])
                                        </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- End -->
                    </div>
                </div>

                <div class="row py-5 p-4 bg-white rounded shadow-sm">
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                        <div class="p-4">
                            <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                            <form action="{{ route('coubonCart') }}" method="post">
                                @csrf
                                <div class="input-group mb-4 border rounded-pill p-2">
                                    <input type="text" name="coubon" placeholder="Apply Coupon"
                                        aria-describedby="button-addon3" class="form-control border-0">

                                    @if (session()->has('coubon'))
                                        <div class="input-group-append border-0">
                                            <button id="button-addon3" type="submit"
                                                class="btn btn-danger px-4 rounded-pill"><i class="fa fa-trash"
                                                    style="margin-right: 5px"></i>Delete
                                                Coupon</button>
                                        </div>
                                    @else
                                        <div class="input-group-append border-0">
                                            <button id="button-addon3" type="submit"
                                                class="btn btn-dark px-4 rounded-pill"><i
                                                    class="fa fa-gift mr-2"></i>Apply
                                                Coupon</button>
                                        </div>
                                    @endif
                                </div>
                            </form>



                        </div>
                        @foreach ($coubon as $coubon)
                            <form action="{{ route('coubonCart') }}" method="post">
                                @csrf
                                @if ($coubon->type == 'percent')
                                    <!--this if for type the coubon (% or $) -->
                                    <div class="bg-light rounded-pill px-4 py-3  font-weight-bold">percentage
                                        discount {{ $coubon->value }}% when entering the code <span
                                            style="color: green;font-size: 18px">[{{ $coubon->code }}]</span>
                                        <input type="hidden" name="coubon" value="{{ $coubon->code }}">


                                        @if (session()->has('coubon'))
                                            @if ($coubon->code == Session::get('coubon')['code'])
                                                <!-- for the button name delete or apply -->
                                                <button style="margin-left: 380px; margin-top: 30px" type="submit"
                                                    class="btn btn-danger">
                                                    Delete
                                                </button>
                                            @else
                                                <button style="margin-left: 380px; margin-top: 30px" type="submit"
                                                    class="btn btn-success">
                                                    Apply
                                                </button>
                                            @endif
                                        @else
                                            <button style="margin-left: 380px; margin-top: 30px" type="submit"
                                                class="btn btn-success">
                                                Apply
                                            </button>
                                        @endif
                                    </div>
                                    <hr>
                                @else
                                    <div class="bg-light rounded-pill px-4 py-3  font-weight-bold">Get a disount
                                        ${{ $coubon->value }} when entering the code <span
                                            style="color: green;font-size: 18px">[{{ $coubon->code }}]</span>
                                        <input type="hidden" name="coubon" value="{{ $coubon->code }}">
                                        @if (session()->has('coubon'))
                                            @if ($coubon->code == Session::get('coubon')['code'])
                                                <button style="margin-left: 380px; margin-top: 30px" type="submit"
                                                    class="btn btn-danger">Delete</button>
                                            @else
                                                <button style="margin-left: 380px; margin-top: 30px" type="submit"
                                                    class="btn btn-success">
                                                    Apply
                                                </button>
                                            @endif
                                        @else
                                            <button style="margin-left: 380px; margin-top: 30px" type="submit"
                                                class="btn btn-success">
                                                Apply
                                            </button>
                                        @endif

                                    </div>
                                    <hr>
                                @endif
                            </form>
                        @endforeach
                        <div class="p-4">

                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary
                        </div>
                        <div class="p-4">
                            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values
                                you
                                have entered.</p>
                            <ul class="list-unstyled mb-4">
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                        class="text-muted">Order
                                        Subtotal
                                    </strong><strong data-price="{{ Helper::totalCartAmount() }}">
                                        ${{ number_format(Helper::totalCartAmount()) }}</strong>
                                </li>

                                @if (session()->has('coubon'))
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                            data-price="{{ Session::get('coubon')['value'] }}" class="text-muted"
                                            style="color: green">
                                            @if (Session::get('coubon')['type'] == 'percent')
                                                {{ number_format(Session::get('coubon')['valuee']) }}%
                                            @else
                                                ${{ number_format(Session::get('coubon')['valuee']) }}
                                            @endif
                                            OFF
                                        </strong><strong>${{ number_format(Session::get('coubon')['value']) }}</strong>
                                    </li>
                                @endif
                                <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                        class="text-muted">Shipping and handling</strong><strong
                                        style="color: green;font-size: 18px">#Free</strong></li>

                                <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                        class="text-muted">Tax</strong><strong
                                        data-price="{{ Helper::totalCartAmount() }}">${{ (10 / 100) * Helper::totalCartAmount() }}</strong>
                                </li>


                                @php
                                    $tax = (10 / 100) * Helper::totalCartAmount();
                                    $total = Helper::totalCartAmount() + $tax;
                                    if (session()->has('coubon')) {
                                        $total = $total - session::get('coubon')['value'];
                                    }
                                @endphp


                                @if (session()->has('coubon'))
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                            style="font-size: 20px" class="text-muted">Total</strong>
                                        <h5 class="font-weight-bold">${{ number_format($total) }}</h5>
                                    </li>
                                @else
                                    <li class="d-flex justify-content-between py-3 border-bottom"><strong
                                            class="text-muted">Total</strong>
                                        <h5 class="font-weight-bold">${{ number_format($total) }}</h5>
                                    </li>
                                @endif


                            </ul>
                            {{-- <a href="{{ route('orderuser.index') }}"
                                class="btn btn-dark rounded-pill py-2 btn-block">Procceed to
                                checkout</a> --}}
                            </ul><a href="{{ route('orderuser.index') }}"
                                class="btn btn-dark rounded-pill py-2 btn-block">Card Payment
                                <svg class="svgIcon" viewBox="0 0 576 512">
                                    <path
                                        d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                                    </path>
                                </svg>
                            </a>
                            </ul><a href="{{ route('cash_On_Delivery') }}"
                                class="btn btn-dark rounded-pill py-2 btn-block">Cash On Delivery
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                </svg>

                                {{-- <img src="https://img.icons8.com/?size=100&id=Z7UtbpazoeHB&format=png&color=000000" style="width: 30px"> --}}
                            </a>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@else
    <div class="container">
        <div class="col-12" style="margin-top: 50px">
            <div class="row">

                <div class="col-6">
                    <img src="{{ asset('user/assets/img/bg-img/cart1.avif') }}">
                </div>
                <div class="col-6">



                    <div class="card">
                        <div class="card1" href="#">
                            <p>what are you waiting</p>
                            <p class="small">You haven't put anything in your cart yet ?</p>
                            <div class="go-corner" href="#">
                                <div class="go-arrow">
                                    →
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a class="card1" href="{{ route('menus') }}">

                            <p>Get 50% cashback when using code (mh50)</p>
                            <div class="go-corner" href="#">
                                <div class="go-arrow">
                                    →
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-3">
                <h4>You haven't put anything in your cart yet, what are you waiting for?</h4>
            </div> --}}
            </div>
        </div>

    </div>
@endif
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
@endsection
