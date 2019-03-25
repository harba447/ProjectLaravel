@extends('base') 
@section('main')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Nouveau etudiant
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Etuiant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" >
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Creer un nouveau etudiant</h1>

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
        <a href="{{ url('/') }}" class="btn btn-primary">La liste des etudiants</a>
            <br>
        <form method="post" action="{{ url('/ajouter') }}" enctype="multipart/form-data" style="border: 50%;">
               {{ csrf_field() }}
      <!--ou @csrf-->
      <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" name="nom">
      </div>

      <div class="form-group">
        <label for="prenom">Prenom:</label>
        <input type="text" class="form-control" name="prenom">
      </div>

      <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" class="form-control" name="login">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email">
      </div>

      <div class="form-group" >
        <label for="pays">Pays:</label>
        <select name="pays" id="" class="form-control">
      <option ">Choisir votre pays</option>
      <option value="SN">Senegal</option>
      <option value="TD">Tchad</option>
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
    <input type="radio" name="genre" value="Homme"  value="Homme" class="form-control">
    <span>Homme</span>
    <input type="radio" name="genre" value="Femme"  value="Femme" class="form-control">
    <span>Femme</span>
      </div>

      <div class="form-group">
        <label for="date_naiss">Date de naissance:</label>
        <input type="date" class="form-control" name="date_naiss">
      </div>

      <div class="form-group">
        <label for="commentaire">Commentaire</label>
        <textarea maxlength="500" name="commentaire" id="" cols="80" rows="5" class="form-control"></textarea>
        </div>

      <div class="form-group">
        <label for="photo">Photo Identite</label>
        <input type="file" name="photo"  class="form-control" id="photo">
      </div>
       <button type="submit" class="btn btn-primary" class="form-control">Ajouter Etudiant</button>
       <button type="reset" class="btn btn-primary" class="form-control">Effacer</button>

    </form>
  </div>
  </div>
      </div>
    </div>
  </div>
</div>

@endsection

