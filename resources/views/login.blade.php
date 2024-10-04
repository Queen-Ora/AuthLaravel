<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Authentification</title>
</head>

<body>

<div class="form-container container mt-5 text-start">
      <form action="{{ route('login.process') }}" method="post">
        @csrf
        <h2>Connexion</h2>

        @if ($errors->any())
        <ul>
            {!! implode('', $errors->all('<li>:message</li>')) !!}
        </ul>
        @endif

        @if ($message = Session::get('errors'))
        <div>{{ $message }}</div> <br>
        @endif
        <div class="form-group mb-3">
            <label for="email">Email</label> <br>
            <input type="text" name="email" id="email" placeholder="Saisir l'e-mail ici ..."> <br> <br>

        </div>

        <div class="form-group mb-3">
            <label for="password">Mot de passe</label> <br>
            <input type="password" name="password" id="password" placeholder="Saisir le mot de passe ici ..."> <br> <br>
            <a href="{{ route('forgottenPassword') }}" >Mot de passe oublier</a> <br> <br>
        </div>



        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>
  
</body>

</html>