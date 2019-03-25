<?php
use Illuminate\Http\Request;
use App\Contact;
use App\pwd;
use App\Etudiant;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/pwd',function(){
	return view('pwd');
});

Route::post('pwd','pwdController@pwd');

Route::get('/pwdA','pwdController@Afficher');


Route::get('/Contact',function(){
	return view('contact');

});

Route::post('Contact','ContactController@contact');

Route::get('/Afficher','ContactController@Afficher');

//Route::resource('etudiant','etudiantController');


Route::get('/test',function(){
	return view('Etudiant');
});



//pour afficher
Route::get('/','EtudiantController@index');
//pour ajouter
Route::get('/create','EtudiantController@create');
Route::post('/ajouter','EtudiantController@store');
//pour la mise ajour
Route::post('maj/{id}','etudiantController@update');

Route::get('/edit/{id}','EtudiantController@edit');
//pour supprimer
Route::post('/destroy/{id}','EtudiantController@destroy');