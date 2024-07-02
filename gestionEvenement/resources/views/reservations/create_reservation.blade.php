<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Ajouter Evenement</title>

</head>
<body  class="container">
    <div class="container mt-5">
        <h1 id="h1">Formulaire Reservation</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/reservations') }}" method="post" class="form">
            @csrf
            <div class="reserver">
                <div class="mb-3">
                    <label for="nom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" >
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="users_id" value="1" >
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="evenement_id" value="1" >
                </div>
                <div class="mb-3">
                    <label for="lieu" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom_reserver" >
                </div>
            </div>

            <div class="deuxieme">

               <div class="mb-3">
                    <label for="date" class="form-label">telephone</label>
                    <input type="number" class="form-control" name="telephone" id="telephone">
                </div>

            </div>

            <div class="mb-3">
                <label for="date_limite_inscription" class="form-label">Fonction</label>
                <input type="text" class="form-control" name="fonction" id="fonction" >
            </div>
            
            <button type="submit" class="btn btn-warning" id="reserver">Reserver</button>
        </form>
    </div>
</body>
</html>
