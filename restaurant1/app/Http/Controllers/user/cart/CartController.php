<?php

namespace App\Http\Controllers\user\cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\coubon;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        // return 'yes';
        $menu_id = $request->menu_id;
        $qty = $request->qty;
        $price = $request->price;
        $user_id = Auth::id();

        if (Auth::check()) {
            $menu = Menu::where('id', $menu_id)->exists();
            if ($menu) {
                if (Cart::where('user_id', Auth::id())->where('menu_id', $menu_id)->exists()) {
                    $cart = Cart::where('user_id', Auth::id())->where('menu_id', $menu_id)->first();
                    $cart->update([
                        'qty' => $cart->qty + $request->qty,
                        'amount' => ($cart->qty + $request->qty) * $price,
                    ]);
                    return response()->json(['succes' => 'added one more successfully ']);
                } else {
                    $cart = new Cart();
                    $cart->menu_id = $menu_id;
                    $cart->qty = $qty;
                    $cart->price = $price;
                    $cart->user_id = $user_id;
                    $cart->amount = $qty * $price;
                    $cart->save();
                    $subtotal = Cart::where('user_id', Auth::id())->sum('amount');


                    //// update coubon /////
                    if (session()->has('coubon')) {

                        $coubon = coubon::where('code', session('coubon')['code'])->first();
                        if ($coubon) {
                            $subtotal = Cart::where('user_id', Auth::id())->sum('amount');
                            session()->put('coubon', [
                                'id' => $coubon->id,
                                'code' => $coubon->code,
                                'type' => $coubon->type,
                                'value' => $coubon->discount($subtotal),
                                'valuee' => $coubon->value,
                            ]);
                        }
                    }

                    return response()->json(['success' => 'added to your cart successfully']);
                }
            } else {
                return response()->json(['error' => 'the product not found!']);
            }
        } else {
            return response()->json(['erro' => 'you need to login first!']);
        }
    }

    public function showcart()
    {

        if (Auth::check()) {
            $data['route'] = 'cartpage';
            $data['coubon'] = coubon::all();
            $data['carts'] = Cart::where('user_id', Auth::id())->get();
            $data['NoProductInCart'] = Cart::where('user_id',Auth::id())->count('qty');
            return view('user.cart.showcart', $data);
        }
    }
    public function updatecart(Request $request)
    {
        $cart_id = $request->cart_id;
        $qty = $request->qty;
        if (Auth::check()) {
            $cart = Cart::where('id', $cart_id)->where('user_id', Auth::id())->first();
            if ($cart) {
                $cart->update([
                    'qty' => $qty,
                    'amount' => $qty * $cart->price,
                ]);
                if (session()->has('coubon')) {

                    $coubon = coubon::where('code', session('coubon')['code'])->first();
                    if ($coubon) {
                        $subtotal = Cart::where('user_id', Auth::id())->sum('amount');
                        session()->put('coubon', [
                            'id' => $coubon->id,
                            'code' => $coubon->code,
                            'type' => $coubon->type,
                            'value' => $coubon->discount($subtotal),
                            'valuee' => $coubon->value,
                        ]);
                    }
                }
                return back()->with(['success' => 'Cart updated successfully']);
            } else {
                return back()->with(['error' => 'Cart item not found']);
            }
        } else {
            return back()->with(['error' => 'You need to login first']);
        }
    }
    public function deletecart($id)
    {


        if (Auth::check()) {
            $cart = Cart::where('id', $id)->where('user_id', Auth::id())->first();
            if ($cart) {
                $cart->delete();
                /////// coubon update //////
                if (session()->has('coubon')) {

                    $coubon = coubon::where('code', session('coubon')['code'])->first();
                    if ($coubon) {
                        $subtotal = Cart::where('user_id', Auth::id())->sum('amount');
                        session()->put('coubon', [
                            'id' => $coubon->id,
                            'code' => $coubon->code,
                            'type' => $coubon->type,
                            'value' => $coubon->discount($subtotal),
                            'valuee' => $coubon->value,
                        ]);
                    }
                }
                return back()->with(['success' => 'Cart deleted successfully']);
            } else {
                return back()->with(['error' => 'Cart item not found']);
            }
        } else {
            return back()->with(['error' => 'You need to login first']);
        }
    }


    /////////////////////// Coubon /////////////////



    public function coubonCart(Request $request)
    {
        if (session()->has('coubon')) {
            $coubon = coubon::where('code', $request->coubon)->first();

            if (Session::get('coubon')['code'] == $coubon->code) {
                session()->remove('coubon');
                return back()->with('success', 'successfully deleted coubon');
            } else {

                $coubon = coubon::where('code', $request->coubon)->first();
                if (!$coubon) {
                    return back()->with('error', 'the coubon not found , try again');
                }
                if ($coubon) {
                    $subtotal = Cart::where('user_id', Auth::id())->sum('amount');
                    session()->put('coubon', [
                        'id' => $coubon->id,
                        'code' => $coubon->code,
                        'type' => $coubon->type,
                        'value' => $coubon->discount($subtotal),
                        'valuee' => $coubon->value,
                    ]);
                    return back()->with('success', 'successfully added coubon');
                }
            }
        } else {


            $coubon = coubon::where('code', $request->coubon)->first();
            if (!$coubon) {
                return back()->with('error', 'the coubon not found , try again');
            }
            if ($coubon) {
                $subtotal = Cart::where('user_id', Auth::id())->sum('amount');
                session()->put('coubon', [
                    'id' => $coubon->id,
                    'code' => $coubon->code,
                    'type' => $coubon->type,
                    'value' => $coubon->discount($subtotal),
                    'valuee' => $coubon->value,
                ]);
                return back()->with('success', 'successfully added coubon');
            }
        }
    }
}





// public function store(Request $request)
// {
//     if (Auth::check()) {
//         // Validate the request data
//         $validatedData = $request->validate([
//             'fname' => 'required|string|max:255',
//             'lname' => 'required|string|max:255',
//             'email' => 'required|email|max:255',
//             'phone' => 'required|string|max:20',
//             'address' => 'required|string|max:255',
//             'address2' => 'nullable|string|max:255',
//             'country' => 'required|string|max:255',
//             'state' => 'required|string|max:255',
//             'zip' => 'required|string|max:20',
//             'payment_method' => 'required|string|max:50',
//         ]);

//         $cartItems = cart::where('user_id', Auth::id())->get();
//         foreach ($cartItems as $cart) {
//             $order = new order();
//             $order->fill($validatedData); // Use fillable property in the model
//             $order->payment_states = 'Unpaid';
//             $order->user_id = $cart->user_id;
//             $order->product_id = $cart->product_id;
//             $order->qty = $cart->qty;
//             $order->color = $cart->color;
//             $order->size = $cart->size;
//             $order->total = $cart->amount;

//             if (session('coubon')) {
//                 $order->coubon = session('coubon')['value'];
//             } else {
//                 $order->coubon = '0';
//             }
//             $order->save();

//             $product = Product::find($order->product_id);
//             if ($product) {
//                 $product->update(['qty' => $product->qty - $order->qty]);
//             }
//             $cart->delete();

//             $notification = new Notification();
//             $notification->order_id = $order->id;
//             $notification->save();
//         }
//         session()->forget('coubon');
//         $subject = 'Winkel Store';
//         $body = ''; // Define the email body content
//         Mail::to($order->email)->send(new usermail($subject, $body));

//         return redirect()->route('thank_you')->with('success', 'Your request has been registered successfully');
//     } else {
//         return back()->with('error', 'Please log in first');
//     }
// }
