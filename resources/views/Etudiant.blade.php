
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel projet</title>
</head>
<body class="loading_table">
  <div class="container">
  <?php
  echo Form::open(['url' => '/test', 'method' => 'POST']);

 //{!! Form::open(['url' => '/test']) !!}

         echo Form::text('email','Entrez votre email');
         echo Form::labele('Pays');
         echo Form::select('9',array('TD'=>'Tchad','SN'=>'Senegal','ML'=>'Mali', 'GC'=>'Guinee Conakry', 'GB'=>'Guinee Bissao', 'MT'=>'Mauritanie','CI'=>'Cote d_Ivoire', 'CG'=>'Congo', 'ET'=>'Ethiopie', 'RD'=>'Rwanda'));
        echo Form::labele('Genre');
        echo Form::radio('Homme','Homme');
        echo Form::text('Date_naiss','Entrez votre prenom');
        echo Form::text('Commentaire','Entrez votre login');
        echo Form::file('Photo','Entrez votre password');
        echo Form::submit('envoyer !');
        echo Form::close();
 ?>
</div>
<script src="{{asset('js/apps.jsd')}}" type="text/javascript"></script>
<script src="{{asset('js/etud.js')}}" type="text/javascript"></script>
</body>
</html>
