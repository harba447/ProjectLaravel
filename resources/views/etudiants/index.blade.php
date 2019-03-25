 
@extends('base')
@section('main')
 <a href="{{ url('/create')}}"class="btn btn-primary">Nouveau etudiant</a>
<div class="row" class="form-control" class="box-table">
<div class="col-sm-12">
    <table class="table" cellpadding="5px" cellspacing="10px" border="2">
  <thead class="thead-dark" style="background: #000;color: #fff; align-content: center;" style="text-align: center;">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Login</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Pays</th>
      <th scope="col">Genre</th>
      <th scope="col">Date_naiss</th>
      <th scope="col">Photo</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
            @foreach($etudiant as $etudiant)
        <tr>
            <th scope="row">{{$etudiant->id}}</th>
            <td scope="row">{{$etudiant->nom}}</td> 
            <td scope="col">{{$etudiant->prenom}}</td>
            <td scope="col">{{$etudiant->login}}</td>
            <td scope="col">{{$etudiant->password}}</td>
            <!--<td scope="col">{{$etudiant->email}}</td>-->
            <td scope="col">{{$etudiant->pays}}</td>
            <td scope="col">{{$etudiant->genre}}</td>
            <td scope="col">{{$etudiant->date_naiss}}</td>
            <td scope="col"><img src="{{asset('/photo/etudiant/'. $etudiant->photo)}}" alt="photo" width="50px;" height="50px;"></td>
            <td>
              <a href="{{ url('edit/'.$etudiant->id)}}"class="btn btn-primary">Edit</a>
            </td><br>
            <td>
              <form action="{{ url('destroy/'.$etudiant->id)}}" method="post">
                     {{ csrf_field() }}
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
  </tbody>
</table>
@endsection
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success" class="box-table">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
</div>
</div>
