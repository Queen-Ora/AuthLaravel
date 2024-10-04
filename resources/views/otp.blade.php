<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Authentification</title>
</head>

<body>
    <form action="{{ route('otpCode.process') }}" method="POST">
        @csrf
        <h1>Code de confirmation</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </ul>
        @endif

        @if ($message = Session::get('error'))
            <div>{{ $message }}</div><br />
        @endif

        <p>
            Un code de confirmation a été envoyé à votre adresse e-mail. Saisissez-le dans le champs pour continuer.
        </p>

        <label for="code">Code de confirmation</label><br />
        <input type="hidden" name="email" id="email" value="{{ session()->get('email') }}">
        <input type="text" name="code" id="code" autocomplete="off"
            placeholder="Saisir le code ici ... "><br /><br />

        <button type="submit">Soumettre</button>
    </form>
</body>

</html>
