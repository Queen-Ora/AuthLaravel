<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Authentification</title>
</head>

<body>


    <div class="container mt-5 mx-auto">
        <form action="{{ route('users.update', $user->id) }}" method="post">
            @csrf

            @method("PATCH")
            <h2>Modification de compte</h2>

            @if ($errors->any())

            <ul class="alert alert-danger">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </ul>
            @endif
            @if ($message = Session::get('error'))
            <div>{{ $message }}</div> <br>
            @endif
            <div class="form-group">
                <label for="name">Nom d'utilisateur</label> <br>
                <input type="text" name="name" id="name" placeholder="Saisir le nom ici ..." value="{{ $user->name }}"> <br> <br>

            </div>
            <div class="form-group">
                <label for="email">Email</label> <br>
                <input type="text" name="email" id="email" placeholder="Saisir l'email ici ..." value="{{ $user->email }}"> <br> <br>

            </div>


            <button type="submit" class="btn btn-success">Soumettre</button>
        </form>
    </div>

</body>

</html>