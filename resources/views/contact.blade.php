<form action="{{url('Contact')}}" method="POST">
	{{csrf_field()}}
	<input type="text" name="nom" placeholder="Nom">
	<input type="text" name="Prenom" placeholder="Prenom">
	<input type="submit" value="Ajouter">
</form>