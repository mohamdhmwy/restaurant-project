<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WorkTime;
use Exception;
use Illuminate\Http\Request;

class WorkTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['worktime'] = WorkTime::all();
        return view('admin.worktime.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.worktime.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validateData = $request->validate([
                'day' => 'required|string|max:20',
                'opening_time' => 'required|string',
                'closing_time' => 'required|string',
            ]);
            $worktime = new WorkTime();
            $worktime->fill($validateData);
            $worktime->save();
            return redirect()->route('worktime.index')->with('success', ' Created Successfuly ');
        } catch (Exception $e) {
            dd($e->getMessage());
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
    public function edit($id)
    {
        $data['worktime'] = WorkTime::where('id', $id)->first();
        return view('admin.worktime.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'day' => 'required|string|max:20',
            'opening_time' => 'required|string',
            'closing_time' => 'required|string',
        ]);
        $worktime = WorkTime::where('id', $id)->first();
        $worktime->update([
            $worktime->fill($validateData),
        ]);
        return redirect()->route('worktime.index')->with('success', ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $worktime = WorkTime::where('id', $id)->first();
        $worktime->delete();
        return redirect()->route('worktime.index')->with('success', ' deleted successfully');
    }
}
