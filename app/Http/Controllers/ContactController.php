<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('Contact')->with('contacts', $contacts);
    }

    public function store(Request $request)
    {
        $contact = new Contact();

        $contact->customer_id = $request->customer_id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;

        $contact->save();

        return redirect('/contact');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('Edit-Contact')->with('contact', $contact);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $contact->id = $request->id;
        $contact->customer_id = $request->customer_id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;

        $contact->save();
        
        return redirect('/contact');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contact');
    }
}
