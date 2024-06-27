@extends('layouts.dashboardAssociation')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css')}}">
    <title>Document</title>

</head>
<body>
    <div class="top-bar">
        <div></div>
        <div class="profile-icons">
            <a href="#"><i class="fas fa-bell"></i></a>
            <a href="#"><i class="fas fa-user-circle"></i></a>
        </div>
    </div>
    <div class="stats-container">
        <div class="stat-item">
            <p>150</p>
            <span>Nombre de réservations</span>
        </div>
        <div class="stat-item">
            <p>5</p>
            <span>Nombre d’évènement en cours</span>
        </div>
        <div class="stat-item">
            <button class="add-event-btn">
                <i class="fas fa-plus-circle text-yellow-500"></i> Ajouter un évènement
            </button>
        </div>
    </div>
    <div class="big-container">
        <div class="container-custom">
            
            <h1 class="title-card">Liste des événements en cours</h1>
            <div class="bg-white rounded-lg shadow-lg p-6">
                @if($evenements->isEmpty())
                    <p>Aucun événement trouvé.</p>
                @else
                    <div class="grid grid-cols-1 gap-6">
                        @foreach($evenements as $evenement)
                            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex relative">
                                <div class="w-1/3">
                                    <img class="w-full h-full object-cover" src="{{ $evenement->image }}" alt="{{ $evenement->nom }}">
                                </div>
                                <div class="w-2/3 p-4">
                                    <h2 class="text-xl font-bold mb-2">{{ $evenement->nom }}</h2>
                                    <div class="flex space-x-4 mb-2">
                                        <p class="text-gray-700"><i class="fas fa-calendar-alt text-yellow-500"></i> {{ $evenement->date }}</p>
                                        <p class="text-gray-700"><i class="fas fa-map-marker-alt text-yellow-500"></i> {{ $evenement->lieu }}</p>
                                        <p class="text-gray-700"><i class="fas fa-users text-yellow-500"></i> {{ $evenement->nombre_place }} places</p>
                                        <p class="text-gray-700"><i class="fas fa-clock text-yellow-500"></i> Date limite: {{ $evenement->date_limite_inscription }}</p>
                                    </div>
                                    <p class="text-gray-700">{{ $evenement->description }}</p>
                                </div>
                                <div class="absolute top-4 right-4 flex space-x-2">
                                    <!--<a href="#" class="text-blue-500 hover:underline"><i class="fas fa-eye"></i></a> !-->
                                    <a href="#" class="text-yellow-500 hover:underline"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="text-red-500 hover:underline"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

</body>
</html>
