<?php

namespace App\Http\Controllers\Commerciale;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        return view('commerciale.contact.index');
    }

   

    public function store(Request $request, Contact $contact)
    {
       /*  $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
        ]); */

        $contact->prenom = $request->prenom;
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->telephone = $request->phone;
        $contact->boutique = $request->boutique;
        $contact->adresse = $request->adresse;
        $contact->user_id = $request->commerciale_id;
        
        $contact->save();

        return redirect()->back();
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        
        return view('commerciale.contact.show', compact('contact'));
    }
}
