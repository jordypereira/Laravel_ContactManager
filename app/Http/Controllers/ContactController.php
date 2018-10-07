<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $contacts = User::find($id)->contacts;
        return view('contacts/index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts/create', ['method' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required_without:email',
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->notes = $request->notes;
        $contact->user_id = Auth::id();

        $contact->save();

        $request->session()->flash('status', 'Added contact. ');
        return redirect('contacts');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts/create', ['method' => 'edit', 'contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required_without:email',
        ]);

        $contact = Contact::find($id);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->notes = $request->notes;
        $contact->user_id = Auth::id();

        $contact->save();

        $request->session()->flash('status', 'Edited contact ' . $request->name . '.');
        return redirect('contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $contact = Contact::find($id);

        $contact->delete();

        $request->session()->flash('status', 'Deleted contact. ');

        return redirect('contacts');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $contact = Contact::find($id);

        $contact->restore();

        return view('contacts');
    }
}
