<form action="{{url('pwd')}}" method="POST">
	{{csrf_field()}}
	<input type="text" name="pwd" placeholder="pwd">
	<input type="submit" value="Ajouter">
</form>