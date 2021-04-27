<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::all();
        return view('backoffice.contacts.contact', compact('contact'));
    }
    public function create(){
        return view('backoffice.contacts.createContact');
    }
    public function store(Request $request){
        $contact = new Contact();
        request()->validate([
            "location" => ["required", "min:3", "max:100"],
            "email" => ["required", "email", "min:3", "max:50"],
            "call" => ["required", "numeric"],
        ]);
        $contact->location = $request->location;
        $contact->email = $request->email;
        $contact->call = $request->call;
        $contact->save();
        return redirect()->route('contacts.index')->with('success', 'Infos bien ajoutés');
    }
    public function destroy(Contact $id){
        $id->delete();
        return redirect()->back();
    }
    public function show(Contact $id){
        $contact = $id;
        return view('backoffice.contacts.showContact', compact('contact'));
    }
    public function edit(Contact $id){
        $contact = $id;
        return view('backoffice.contacts.editContact', compact('contact'));
    }
    public function update(Contact $id, Request $request){
        request()->validate([
            "location" => ["required", "min:3", "max:100"],
            "email" => ["required", "email", "min:3", "max:50"],
            "call" => ["required", "numeric"],
        ]);
        $contact = $id;
        $contact->location = $request->location;
        $contact->email = $request->email;
        $contact->call = $request->call;
        $contact->save();
        return redirect()->route('contacts.show', $contact->id)->with('success', "vos modifications ont bien été mis à jour");
    }
}
