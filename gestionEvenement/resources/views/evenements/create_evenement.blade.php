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
        <h1 id="h1_ajout_evenement">Ajouter un événement</h1>

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

        <form action="{{ url('/evenements') }}" method="post" enctype="multipart/form-data" class="form">
            @csrf
            <div class="premier">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" >
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="association_id" value="1" >
                </div>
                <div class="mb-3">
                    <label for="lieu" class="form-label">Lieu</label>
                    <input type="text" class="form-control" name="lieu" id="lieu" >
                </div>
            </div>

            <div class="deuxieme">

                <div class="mb-3">
                    <label for="nombre_de_place" class="form-label">Nombre de places</label>
                    <input type="number" class="form-control" name="nombre_place" id="nombre">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" id="date">
                </div>

            </div>

            <div class="mb-3">
                <label for="date_limite_inscription" class="form-label">Date Limite Inscription</label>
                <input type="date" class="form-control" name="date_limite_inscription" id="date_limite" >
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="image" ">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="10" name="description" ></textarea>
            </div>

            <button type="submit" class="btn btn-warning" id="ajouter_evenement">Ajouter</button>
        </form>
    </div>
</body>
</html>
