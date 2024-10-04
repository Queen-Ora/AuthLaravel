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

<body class="container mx-auto mt-5">
    <div>
        <h1>Tableau de bord</h1>

        <hr>
        <h3>Bienvenue {{ Auth::user()->name }}</h3>
        <hr>
        <a class="styled-link btn btn-danger flex-end" href="{{ route('logout') }}">
            Se déconnecter
        </a>
    </div>
    <div class="mt-3">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary"> Dashboard</a>
    </div>
</body>

</html>
