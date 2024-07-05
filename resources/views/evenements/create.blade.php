@extends('layouts.dashboardAssociation')

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/modification.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de Création d'Événement</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="title">Formulaire de Création d'Événement</h1>

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

        <form action="{{ route('evenements.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez le nom de l'événement" required>
                </div>
                <div class="col-md-6">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" id="date" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="lieu" class="form-label">Lieu</label>
                <input type="text" class="form-control" name="lieu" id="lieu" placeholder="Entrez le lieu de l'événement" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="Entrez la description de l'événement" required></textarea>
            </div>
            <div class="mb-3">
                <label for="nombre_place" class="form-label">Nombre de Places</label>
                <input type="number" class="form-control" name="nombre_place" id="nombre_place" placeholder="Entrez le nombre de places disponibles" required>
            </div>
            <div class="mb-3">
                <label for="date_limite_inscription" class="form-label">Date Limite d'Inscription</label>
                <input type="date" class="form-control" name="date_limite_inscription" id="date_limite_inscription" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="image" required>
            </div>
            <button type="submit" class="btn-evenement">Créer événement</button>
        </form>
    </div>
</body>
</html>
