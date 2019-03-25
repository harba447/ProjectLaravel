<h1>Je suis la page Afficher</h1>
@foreach($ct as $contact)
{{$contact->nom}}
{{$contact->prenom}}<br/>
@endforeach


@foreach($pass as $valeur) 
	{{$pwd->pwd}}
@endforeach