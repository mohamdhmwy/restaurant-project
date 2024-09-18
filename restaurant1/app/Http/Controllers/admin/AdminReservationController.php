<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\reservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['reservation'] = reservation::all();
        return view('admin.reservation.index', $data);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['reservations'] = reservation::where('id',$id)->first();
        $reservation = reservation::where('id',$id)->where('read_at','0')->first();
        $reservation->update([
            'read_at' => '1'
        ]);

        return view('admin.reservation.show', $data);


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
        $reservation = reservation::where('id',$id)->first();
        $reservation->delete();
        return back()->with('success','Deleted Successfully');
    }
}
