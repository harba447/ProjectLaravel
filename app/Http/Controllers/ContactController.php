<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
    $ct=new Contact;
	$ct->nom=$request->input('nom');
	$ct->prenom=$request->input('Prenom');
	$ct->save();
	return redirect('/Afficher');
    }

    public function Afficher()
    {
    	$ct=Contact::all();
		return view('afficher',compact('ct'));
    }
}
