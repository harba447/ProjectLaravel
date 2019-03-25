<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $etudiant = Etudiant::all();

        return view('etudiants.index', compact('etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('etudiants.create'); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $Request)
    {
        $this->validate($Request,[
            'nom'=>'Required',
            'prenom'=>'Required',
            'date_naiss'=>'Required',
            'email'=>'Required'
        ]);

        $etudiant=new Etudiant;
        $etudiant->nom =  $Request->input('nom');
        $etudiant->prenom = $Request->input('prenom');
        $etudiant->login = $Request->input('login');
        $etudiant->password = $Request->input('password');
        $etudiant->date_naiss = $Request->input('date_naiss');
        $etudiant->email = $Request->input('email');
        $etudiant->pays = $Request->input('pays');
        $etudiant->genre = $Request->input('genre');
        $etudiant->commentaire=$Request->input('commentaire');
        
        if ($file = $Request->file('photo')) { 
     $fileName = $file->getClientOriginalName(); 
     $extension = $file->getClientOriginalExtension() ?: 'png,jpg'; 
     $folderName = '/photo/etudiant/'; 
     $destinationPath = public_path() . $folderName; 
     $safeName = str_random(10) . '.' . $extension; 
     $file->move($destinationPath, $safeName); 
     $Request['photo'] = $safeName;

       // $request->request->add(['photo' => $safeName]); 
   $etudiant->photo = $safeName;
}
    
         $etudiant->save();
        return redirect('/')->with('success','Etudiant Ajuté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiants.edit', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {       $this->validate($request,[
            'nom'=>'required',
            'prenom'=>'required',
            'date_naiss'=>'required',
          'email'=>'required']);
        $etudiant = Etudiant::find($id);
        $etudiant->nom =  $request->get('nom');
        $etudiant->prenom = $request->get('prenom');
        $etudiant->login = $request->get('login');
        $etudiant->password = $request->get('password');
        $etudiant->date_naiss = $request->get('date_naiss');
        $etudiant->email = $request->get('email');
        $etudiant->pays = $request->get('pays');
        $etudiant->genre = $request->get('genre');
        $etudiant->commentaire=$request->get('commentaire');
        if ($file = $request->file('photo')) { 
     $fileName = $file->getClientOriginalName(); 
     $extension = $file->getClientOriginalExtension() ?: 'png,jpg'; 
     $folderName = '/photo/etudiant/'; 
     $destinationPath = public_path() . $folderName; 
     $safeName = str_random(10) . '.' . $extension; 
     $file->move($destinationPath, $safeName); 
     $Request['photo'] = $safeName; 
   $etudiant->photo = $safeName;
} $etudiant->save();
 return redirect('/')->with('success', 'Etudiant mis a jour avec succé  !');
    }        


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
 public function destroy($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect('/')->with('suppression', 'Etudiant Supprimé!');
    }
}
 

