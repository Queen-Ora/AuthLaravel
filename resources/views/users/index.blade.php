<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    {{-- <style>
        a {
            text-decoration: none;
            color: black;
        }

        .btn {
            width: 30%;
            padding: 10px;
            background-color: #0056b3;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style> --}}


    

    <div class="container mt-5 mx-auto">
        <a href="{{ route('home') }}" class="btn btn-primary">Accueil</a>

        <h1>les comptes</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col" class="text-end">Operation</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user->id }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}

                        </td>

                        <td>
                            {{ $user->role }}
                        </td>
                        <td class="text-end">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
                                Modifier
                            </a>
                            &nbsp;
                            <form class="d-inline" action="{{ route('users.destroy', $user->id) }}" method="POST"
                                onsubmit="return confirm('Êtes-vous sûr(e) de vouloir supprimer la catégorie {{ $user->name }} ? Cette action sera irréversible !')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Suprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        <a href=" {{ route('register') }} " class="btn btn-success">Ajouter un ulilisateur</a>
    </div>
</body>

</html>
