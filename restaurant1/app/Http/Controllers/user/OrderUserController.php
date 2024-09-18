<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Mail\usermail;
use App\Models\Cart;
use App\Models\notification;
use App\Models\order;
use Exception;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe;

class OrderUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['route'] = 'cartpage';
        $data['menu_in_checkout'] = Cart::where('user_id', Auth::id())->get();
        return view('user.order.checkout', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request) //////checkout Card_Payment
    {


        $tax = (10 / 100) * Helper::totalCartAmount();  //////payment paypal
        $total = Helper::totalCartAmount() + $tax;
        if (session()->has('coubon')) {
            $total = $total - Session::get('coubon')['value'];
        }

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = new Charge();
        $charge->amount = $total;
        $charge->currency = "usd";
        $charge->source = $request->stripeToken;
        $charge->description = "Test payment from itsolutionstuff.com.";

        if (Auth::check()) {  ////////////add order
            try {
                $validatedData = $request->validate([
                    'fname' => 'required|string|max:255',
                    'lname' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'phone' => 'required|max:17',
                    'address' => 'required|string|max:255',
                    'address2' => 'nullable|string|max:255',
                    'country' => 'required|string|max:255',
                    'state' => 'required|string|max:255',
                    'zip' => 'required',
                    'info' => 'required|string|max:400',
                ]);

                // 'payment_method' => 'required|string|max:50',
                $cart = Cart::where('user_id', Auth::id())->get();

                foreach ($cart as $cart) {
                    $order = new order();
                    $order->fill($validatedData);
                    // if($request->payment_method == 'Cash_On_Delivery'){

                    //     $order->payment_states = 'Unpaid';
                    // }else{
                    //     $order->payment_states = 'Paid';

                    // }
                    $order->payment_method = 'Card_Payment';
                    $order->payment_states = 'Paid';
                    $order->user_id = $cart->user_id;
                    $order->menu_id = $cart->menu_id;
                    $order->qty = $cart->qty;
                    $order->total = $total;
                    if (session()->has('coubon')) {
                        $order->coubon = session('coubon')['code'];
                    } else {
                        $order->coubon = '0';
                    }
                    $order->save();
                    $cart->delete();
                    $notification = new notification();
                    $notification->order_id = $order->id;
                    $notification->save();
                }
                session()->remove('coubon');
                $body = '';
                $subject = 'Bueno Restuarant';
                Mail::to($order->email)->send(new OrderMail($body, $subject));
                return redirect()->route('thank_you')->with('success', 'Your request has been registered successfully');
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        } else {
            return back()->with('error', 'Please login first');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function thankyou()
    {
        if (Auth::check()) {
            $data['route'] = 'cartpage';
            return view('user.order.thank_you', $data);
        }
    }
    public function cashOnDelivery()
    {
        if (Auth::check()) {
            $data['route'] = 'cartpage';
            $data['menu_in_checkout'] = Cart::where('user_id', Auth::id())->get();

            return view('user.order.checkoutDelivery', $data);
        }
    }
    public function StoreOrderDelivery(Request $request)  //////checkout Cash_On_Delivery
    {
        if (Auth::check()) {
            $tax = (10 / 100) * Helper::totalCartAmount();  //////payment paypal
            $total = Helper::totalCartAmount() + $tax;
            if (session()->has('coubon')) {
                $total = $total - Session::get('coubon')['value'];
            }
            try {
                $validatedData1 = $request->validate([
                    'fname' => 'required|string|max:255',
                    'lname' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'phone' => 'required|max:17',
                    'address' => 'required|string|max:255',
                    'address2' => 'nullable|string|max:255',
                    'country' => 'required|string|max:255',
                    'state' => 'required|string|max:255',
                    'zip' => 'required',
                    'info' => 'required|string|max:400',
                ]);
                $cart = Cart::where('user_id', Auth::id())->get();
                foreach ($cart as $cart) {
                    $order = new order();
                    $order->fill($validatedData1);
                    $order->payment_method = 'Cash_On_Delivery';
                    $order->payment_states = 'Unpaid';
                    $order->user_id = $cart->user_id;
                    $order->menu_id = $cart->menu_id;
                    $order->qty = $cart->qty;
                    $order->total = $total;
                    if (session()->has('coubon')) {
                        $order->coubon = session('coubon')['code'];
                    } else {
                        $order->coubon = '0';
                    }
                    $order->save();
                    $cart->delete();
                    $notification = new notification();
                    $notification->order_id = $order->id;
                    $notification->save();
                }
                session()->remove('coubon');
                $body = '';
                $subject = 'Bueno Restuarant';
                Mail::to($order->email)->send(new OrderMail($body, $subject));
                return redirect()->route('thank_you')->with('success', 'Your request has been registered successfully');
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        } else {
            return back()->with('error', 'Please login first');
        }
    }
}


