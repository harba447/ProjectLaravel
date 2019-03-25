<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
	protected $table='etudiants';
	protected $fillable=[
		'nom',
		'prenom',
		'login',
		'password',
		'email',
		'pays',
		'genre',
		'date_naiss',
		'commentaire',
		'photo'
	];
    
}
