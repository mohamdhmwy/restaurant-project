<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['contact'] = Contact::all();
        return view('admin.contact.index', $data);
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
        $data['contact'] = Contact::where('id', $id)->first();
        $contact = Contact::where('id', $id)->where('read_at', '0')->first();
        if ($contact) {
            $contact->update([
                'read_at' => '1',
            ]);
        }
        return view('admin.contact.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['contact'] = Contact::where('id', $id)->first();
        return view('admin.contact.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = Contact::where('id', $id)->first();
        $contact->update([
            'message_status' => $request->message_status,
        ]);
        return redirect()->route('contacts.index')->with('success', 'message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::where('id', $id)->first();
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'message deleted successfully');
    }
}
