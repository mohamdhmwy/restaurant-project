<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\notification;
use App\Models\order;
use Exception;
use Helper;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\ExpressCheckout;
use Stripe\Charge;
use Stripe;
use Illuminate\Support\Facades\Session;
use Stripe\Exception\CardException; // Ensure this is imported
use Stripe\Exception\ApiErrorException;

class ReservationController extends Controller
{

    

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    // public function stripePost(Request $request)
    // {
    //     $tax = (10 / 100) * Helper::totalCartAmount();
    //     $total = Helper::totalCartAmount() + $tax;
    //     if (session()->has('coubon')) {
    //         $total = $total - Session::get('coubon')['value'];
    //     }

    //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //     $charge = new Charge();
    //     $charge->amount = $total;
    //     $charge->currency = "usd";
    //     $charge->source = $request->stripeToken;
    //     $charge->description = "Test payment from itsolutionstuff.com.";
    //     // dd($charge);

    //     if (Auth::check()) {
    //         try {
    //             $validatedData = $request->validate([
    //                 'fname' => 'required|string|max:255',
    //                 'lname' => 'required|string|max:255',
    //                 'email' => 'required|email|max:255',
    //                 'phone' => 'required|max:17',
    //                 'address' => 'required|string|max:255',
    //                 'address2' => 'nullable|string|max:255',
    //                 'country' => 'required|string|max:255',
    //                 'state' => 'required|string|max:255',
    //                 'zip' => 'required',
    //                 'payment_method' => 'required|string|max:50',
    //                 'info' => 'required|string|max:400',
    //             ]);
    //             // return $validatedData;

    //             $cart = Cart::where('user_id', Auth::id())->get();

    //             foreach ($cart as $cart) {
    //                 $order = new order();
    //                 $order->fill($validatedData);
    //                 // $order->fname = $request->fname;
    //                 $order->payment_states = 'Unpaid';
    //                 $order->user_id = $cart->user_id;
    //                 $order->menu_id = $cart->menu_id;
    //                 $order->qty = $cart->qty;
    //                 $order->total = $cart->amount;
    //                 if (session()->has('coubon')) {
    //                     $order->coubon = session('coubon')['code'];
    //                 } else {
    //                     $order->coubon = '0';
    //                 }
    //                 $order->save();
    //                 $cart->delete();
    //                 $notification = new notification();
    //                 $notification->order_id = $order->id;
    //                 $notification->save();
    //             }
    //             session()->remove('coubon');
    //             $body = '';
    //             $subject = 'Bueno Restuarant';
    //             Mail::to($order->email)->send(new OrderMail($body, $subject));
    //             return redirect()->route('thank_you')->with('success', 'Your request has been registered successfully');
    //         } catch (Exception $e) {
    //             dd($e->getMessage());
    //         }
    //     } else {
    //         return back()->with('error', 'Please log in first');
    //     }
    // }







    // Stripe\Charge::create([
    //     "amount" => 100 * 100,
    //     "currency" => "usd",
    //     "source" => $request->stripeToken,
    //     "description" => "Test payment from itsolutionstuff.com."
    // ]);

    // Session::flash('success', 'Payment successful!');

    // return back();










    // public function showReservationForm()
    // {
    //     $data['route'] = 'ss';
    //     return view('user.reservation.index', $data);
    // }

    // public function payment()
    // {
    //     $data = [];
    //     $data['items'] = [
    //         [
    //             'name' => 'Reservation',
    //             'price' => 1000,
    //             'desc' => 'Description',
    //             'qty' => 2,
    //         ],
    //         [
    //             'name' => 'Reservation item',
    //             'price' => 300,
    //             'desc' => 'Description',
    //             'qty' => 2,
    //         ],
    //     ];
    //     // uniqid()
    //     $data['invoice_id'] = 1;
    //     $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
    //     $data['return_url'] = 'http://127.0.0.1:8000/payment/success';
    //     $data['cancel_url'] = 'http://127.0.0.1:8000/payment/cancel';
    //     $data['total'] = 2600;

    //     $provider = new ExpressCheckout;
    //     $response = $provider->setExpressCheckout($data, true);
    //     dd($response);
    //     return redirect($response['paypal_link']);
    // }


    // public function paymentSuccess(Request $request)
    // {
    //     $provider = new ExpressCheckout;
    //     $response = $provider->getExpressCheckoutDetails($request->token);
    //     if (in_array(strtoupper($response['ACE']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
    //         return response()->json('paid success');
    //         // return view('user.reservation.success')->with('success', 'successfully payment');
    //     }
    //     return response()->json('paid success');
    //     // return redirect('/reservation')->with('error', 'Payment failed.');
    // }

    // public function paymentCancel()
    // {
    //     return response()->json('payment canceld',402);
    //     // return redirect('/reservation')->with('error', 'Payment was cancelled.');
    // }




    // public function showForm()
    // {
    //     $data['route'] = 'Reservation';
    //     return view('user.reservation.index', $data);
    // }
    // public function submitForm(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required',
    //         'date' => 'required|date',
    //         'time' => 'required',
    //         'amount' => 'required|numeric|min:0.01',
    //         'stripeToken' => 'required'
    //     ]);

    //     Stripe::setApiKey(env('STRIPE_SECRET'));

    //     $amountInCents = $request->amount * 100; // تحويل الدولار إلى سنتات

    //     try {
    //         $charge = Charge::create([
    //             'amount' => $amountInCents,
    //             'currency' => 'usd',
    //             'description' => 'Table Reservation',
    //             'source' => $request->stripeToken,
    //             'metadata' => [
    //                 'name' => $request->name,
    //                 'email' => $request->email,
    //                 'phone' => $request->phone,
    //                 'date' => $request->date,
    //                 'time' => $request->time
    //             ],
    //         ]);

    //         // يمكنك حفظ تفاصيل الحجز في قاعدة البيانات هنا

    //         return redirect('/reserve')->with('success', 'Reservation successful!');
    //     } catch (\Exception $e) {
    //         return back()->withErrors(['error' => 'Error processing payment: ' . $e->getMessage()]);
    //     }
    // }

    // public function submitForm(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required',
    //         'date' => 'required|date',
    //         'time' => 'required',
    //         'amount' => 'required|numeric|min:0.01',
    //         'stripeToken' => 'required'
    //     ]);

    //     $stripeSecretKey = config('stripe.secret');
    //     $stripePublicKey = config('stripe.public');

    //     Stripe::setApiKey($stripeSecretKey);

    //     $amountInCents = $request->amount * 100; // تحويل الدولار إلى سنتات

    //     try {
    //         $charge = Charge::create([
    //             'amount' => $amountInCents,
    //             'currency' => 'usd',
    //             'description' => 'Table Reservation',
    //             'source' => $request->stripeToken,
    //             'metadata' => [
    //                 'name' => $request->name,
    //                 'email' => $request->email,
    //                 'phone' => $request->phone,
    //                 'date' => $request->date,
    //                 'time' => $request->time
    //             ],
    //         ]);

    //         // يمكنك حفظ تفاصيل الحجز في قاعدة البيانات هنا

    //         return redirect('/reserve')->with('success', 'Reservation successful!');
    //     } catch (\Stripe\Exception\CardException $e) {
    //         return back()->withErrors(['error' => 'Card declined: ' . $e->getMessage()]);
    //     } catch (\Exception $e) {
    //         return back()->withErrors(['error' => 'Error processing payment: ' . $e->getMessage()]);
    //     }
    // }

    // Import other Stripe exceptions as needed



    // public function submitForm(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required',
    //         'date' => 'required|date',
    //         'time' => 'required',
    //         'amount' => 'required|numeric|min:0.01',
    //         'stripeToken' => 'required'
    //     ]);

    //     $stripeSecretKey = config('stripe.secret');
    //     if (!$stripeSecretKey) {
    //         return back()->withErrors(['error' => 'Stripe secret key is not set.']);
    //     }

    //     Stripe::setApiKey($stripeSecretKey);

    //     $amountInCents = $request->amount * 100; // Convert dollars to cents

    //     try {
    //         $charge = Charge::create([
    //             'amount' => $amountInCents,
    //             'currency' => 'usd',
    //             'description' => 'Table Reservation',
    //             'source' => $request->stripeToken,
    //             'metadata' => [
    //                 'name' => $request->name,
    //                 'email' => $request->email,
    //                 'phone' => $request->phone,
    //                 'date' => $request->date,
    //                 'time' => $request->time
    //             ],
    //         ]);

    //         // Save reservation details to the database here

    //         return redirect('/reserve')->with('success', 'Reservation successful!');
    //     } catch (CardException $e) {
    //         return back()->withErrors(['error' => 'Card declined: ' . $e->getMessage()]);
    //     } catch (ApiErrorException $e) {
    //         return back()->withErrors(['error' => 'Stripe API error: ' . $e->getMessage()]);
    //     } catch (\Exception $e) {
    //         return back()->withErrors(['error' => 'Error processing payment: ' . $e->getMessage()]);
    //     }
    // }

    // ... existing code ...


}
