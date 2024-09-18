<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\coubon;
use Illuminate\Http\Request;

class CoubonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['coubon'] = coubon::all();
        return view('admin.coubon.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.coubon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $coubon = new coubon();
        $coubon->code = $request->code;
        $coubon->value = $request->value;
        $coubon->type = $request->type;
        $coubon->save();
        return redirect()->route('coubon.index')->with('success','Coubon Created Successfuly ');
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
    public function edit(coubon $coubon)
    {
        $data['coubon'] = coubon::where('id',$coubon->id)->first();
        return view('admin.coubon.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, coubon $coubon)
    {
        $coubon->update([
            'code' => $request->code,
            'type'=> $request->type,
            'value' => $request->value,
        ]);
        return redirect()->route('coubon.index')->with('success','Coubon Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(coubon $coubon)
    {
        $coubon->delete();
        session()->remove('coubon');
        return redirect()->route('coubon.index')->with('success','Coubon Deleted Successfuly ');
    }
}
