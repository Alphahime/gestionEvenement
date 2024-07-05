@extends('layouts.dashboardAssociation')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Document</title>
    <style>
        .association {
            color: black;
        }
        .lien {
            color: black;
        }
    </style>
</head>
<body class="bg-white">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="top-bar flex justify-between items-center p-4 bg-gray-200">

    
        <div class="association">
            <h1>Bonjour</h1>
            @if (Auth::guard('association')->check())
                <h1>{{ Auth::guard('association')->user()->nom }}</h1>
            @else
                <h1>Invité</h1>
            @endif
        </div>
        @if ($message = Session::get('error'))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
        <button id="burger-menu" class="block md:hidden text-yellow-500">
            <i class="fas fa-bars"></i>
        </button>
        <div class="profile-icons flex space-x-4">
            <a href="#" class="text-yellow-500"><i class="fas fa-bell"></i></a>
            <a href="#" class="text-yellow-500"><i class="fas fa-user-circle"></i></a>
        </div>
    </div>
    
    <div class="stats-container p-6">
        <div class="stat-item bg-gray-200 rounded-lg p-4 mb-4">
            <p class="text-4xl font-bold">{{ $countReservations }}</p>
            <span class="text-gray-500">Nombre de réservations</span>
        </div>
        <div class="stat-item bg-gray-200 rounded-lg p-4 mb-4">
            <p class="text-4xl font-bold">{{ $countEvenements }}</p>
            <span class="text-gray-500">Nombre d’évènements en cours</span>
        </div>
        <div class="stat-item bg-gray-200 rounded-lg p-4 mb-4">
            <a href="{{ route('evenements.create') }}" class="add-event-btn text-yellow-500">
                <i class="fas fa-plus-circle"></i> Ajouter un évènement
            </a>
        </div>
    </div>
    
    <div class="big-container p-6">
        <div class="container-custom">
            <h1 class="title-card text-2xl font-bold mb-6">Liste des événements en cours</h1>
            <div class="rounded-lg p-4">
                @if($evenements->isEmpty())
                    <p>Aucun événement trouvé.</p>
                @else
                    <div class="grid grid-cols-1 gap-6">
                        @foreach($evenements as $evenement)
                            <div class="bg-gray-200 rounded-lg overflow-hidden flex relative mb-6">
                                <div class="w-full md:w-1/3">
                                    <img src="{{ asset('storage/images/' . $evenement->image) }}" class="w-full h-48 object-cover rounded-t-lg" alt="{{ $evenement->nom }}">
                                </div>
                                <div class="w-full md:w-2/3 p-4">
                                    <h2 class="text-xl font-bold mb-2">{{ $evenement->nom }}</h2>
                                    <div class="flex flex-col md:flex-row md:space-x-4 mb-2">
                                        <p class="text-gray-700"><i class="fas fa-calendar-alt text-yellow-500"></i> {{ $evenement->date }}</p>
                                        <p class="text-gray-700"><i class="fas fa-map-marker-alt text-yellow-500"></i> {{ $evenement->lieu }}</p>
                                        <p class="text-gray-700"><i class="fas fa-users text-yellow-500"></i> {{ $evenement->nombre_place }} places</p>
                                        <p class="text-gray-700"><i class="fas fa-clock text-yellow-500"></i> Date limite: {{ $evenement->date_limite_inscription }}</p>
                                    </div>
                                    <p class="text-gray-700">{{ $evenement->description }}</p>
                                    <div class="flex mt-4 md:absolute md:bottom-4 md:right-4 md:space-x-2">
                                        <a href="{{ route('evenements.edit', $evenement->id) }}" class="text-yellow-500 hover:underline"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('evenements.destroy', $evenement->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet événement?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const burgerMenu = document.getElementById('burger-menu');
            const sidebar = document.querySelector('.sidebar');

            burgerMenu.addEventListener('click', function () {
                sidebar.classList.toggle('translate-x-0');
            });
        });
    </script>
</body>
</html>
