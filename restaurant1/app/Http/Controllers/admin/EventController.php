<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['event'] = Event::all();
        return view('admin.event.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validateData = $request->validate([
                'name' => 'required|string|max:255',
                'des' => 'required|string',
                'price' => 'required|integer',
            ]);
            $event = new Event();
            $image = $request->file('image')->store('public/assets/uplode/event');
            $event->image = $image;
            $event->fill($validateData);
            $event->save();
            return redirect()->route('event.index')->with('success', 'Event Created Successfuly ');
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
    public function edit(string $id)
    {
        $data['event'] = Event::where('id', $id)->first();
        return view('admin.event.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $event = Event::where('id', $id)->first();
            $image = $event->image;
            if ($request->hasFile('image')) {
                Storage::delete($image);
                $image = $request->file('image')->store('public/assets/uplode/event');
            }
            $validateData = $request->validate([
                'name' => 'string|max:255',
                'des' => 'string',
                'price' => 'integer',
            ]);
            $event->update([
                'image' => $image,
                $event->fill($validateData),

            ]);

            return redirect()->route('event.index')->with('success', 'Event Updated Successfuly ');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::where('id', $id)->first();
        $image = $event->image;
        Storage::delete($image);
        $event->delete();
        return redirect()->route('event.index')->with('success', 'Event Deleted Successfuly ');


    }
}
