<?php

namespace App\Http\Controllers\user\reservation;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\reservation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe;

class reservationController extends Controller
{
    public function showReservationForm()
    {
        if (Auth::check()) {

            $data['route'] = 'Reservation';

            return view('user.reservation.index', $data);
        } else {
            return back()->with('error', 'you showld login first');
        }
    }
    public function Add_Reservation(Request $request)
    {

        try {
            if (Auth::check()) {
                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                $charge = new Charge();
                $charge->amount = 1000;
                $charge->currency = "usd";
                $charge->source = $request->stripeToken;
                $charge->description = "Test payment from itsolutionstuff.com.";

                $validateData = $request->validate([
                    'full_name' => 'required|string|max:255',
                    'email' => 'required|email|max:50',
                    'number_people' => 'required|integer',
                    'event' => 'required|string',
                    'date' => 'required|string',
                    'time' => 'required|string',
                ]);
                $reservation = new reservation();
                $reservation->fill($validateData);
                $reservation->user_id = Auth::id();
                $reservation->Save();
                return redirect()->route('thank_you')->with('success', 'The reservation process was completed successfully');
            } else {
                return back()->with('error', 'you showld login first');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
