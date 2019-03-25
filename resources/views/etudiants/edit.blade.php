@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Mise a jour de l'etudiant</h1>
   <link rel="stylesheet" type="text/css" href="{{asset('css/app.scss')}}">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ url('maj/'.$etudiant->id) }}" enctype="multipart/form-data">
               {{ csrf_field() }}
             <div class="form-group" >
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" name="nom"  value="{{ $etudiant->nom }}">
      </div>

      <div class="form-group">
        <label for="prenom">Prenom:</label>
        <input type="text" class="form-control" name="prenom"  value="{{ $etudiant->prenom }}">
      </div>

      <div class="form-group" class="box-table">
        <label for="login">Login:</label>
        <input type="text" class="form-control" name="login"  value="{{ $etudiant->login }}">
      </div>

      <div class="form-group" class="box-table">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password"  value="{{ $etudiant->password }}">
      </div>

      <div class="form-group" class="box-table">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email"  value="{{ $etudiant->email }}">
      </div>

      <div class="form-group" class="box-table" class="loading_table">
        <label for="pays">Pays:</label>
        <select name="pays" id="">
      <option  value="{{ $etudiant->pays }}" class="form-control">Choisir votre pays</option>
      <option value="TD">Tchad</option>
      <option value="SN">Senegal</option>
      <option value="ML">Mali</option>
      <option value="GC">Guinee Conakry</option>
      <option value="GB">Guinee Bissao</option>
      <option value="MT">Mauritanie</option>
      <option value="CI">Cote d'Ivoire</option>
      <option value="CG">Congo</option>
      <option value="ET">Ethiopie</option>
      <option value="RD">Rwanda</option>
    </select>
      </div>

      <div class="form-group" class="box-table">
        <label for="genre">Genre:</label>
    <input type="radio" name="genre" value="Homme"  value="{{ $etudiant->Homme }}" class="form-control">
    <span>Homme</span>
    <input type="radio" name="genre" value="Femme"  value="{{ $etudiant->Femme }}" class="form-control">
    <span>Femme</span>
      </div>

      <div class="form-group" class="box-table">
        <label for="date_naiss">Date de naissance:</label>
        <input type="date" class="form-control" name="date_naiss"  value="{{ $etudiant->date_naiss }}">
      </div>

      <div class="form-group" class="box-table">
        <label for="commentaire">Commentaire</label>
        <textarea maxlength="500" name="commentaire" id="" cols="80" rows="5" class="form-control">{{ $etudiant->commentaire }}</textarea>
        </div>

      <div class="form-group" class="box-table">
        <label for="">Photo Identite</label>
        <input type="file" name="photo" value="{{ $etudiant->photo }}" class="form-control"/>
      </div>
    <button type="submit" class="btn btn-primary" class="form-control" value="">Update</button>
        </form>
    </div>
</div>
@endsection