{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/landingpage.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Page d'Accueil</title>
</head>
<body> --}}
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>Senevent's</title>
    </head>
    <body>
        @extends('layouts.acceuil')
        @section('body')
        <div class="banniere">
            <div>
                <img src="{{ asset('imgs/image 7.png') }}" alt="banniere" id="img_ban">
            </div>
            <div class="text_ban">
                <h2>Découvrez et participez aux <br>événements incontournables près <br> de chez vous !</h2>
                <p>Des événements inspirants aux fêtes inoubliables, tout <br>est à portée de main ! Elle permet aux associations de <br> publier facilement leurs événements et aux utilisateurs de <br>réserver rapidement.</p>
                <a href="register"><button id="bouton_inscription">Inscription</button></a>
            </div>
        </div>
    
        <div class="carte">
            <div class="carte1">
                <div>
                    <img src="{{ asset('imgs/atelier.png') }}" alt="Image">
                </div>
                <div>
                    <h2>Festival</h2>
                </div>
                <div>
                    <p>Réservez votre place et participez à des <br> cérémonies, des conférences et des rencontres <br>communautaires qui nourrissent votre âme et <br>renforcent vos liens spirituels.</p>
                </div>
            </div>
    
            <div class="carte2">
                <div>
                    <img src="{{ asset('imgs/atelier.png') }}" alt="Image">
                </div>
                <div>
                    <h2>Atelier</h2>
                </div>
                <div>
                    <p>Réservez votre place et participez à des <br> cérémonies, des conférences et des rencontres <br>communautaires qui nourrissent votre âme et <br>renforcent vos liens spirituels.</p>
                </div>
            </div>
    
            <div class="carte3">
                <div>
                    <img src="{{ asset('imgs/atelier.png') }}" alt="Image">
                </div>
                <div>
                    <h2>Conférence</h2>
                </div>
                <div>
                    <p>Réservez votre place et participez à des <br> cérémonies, des conférences et des rencontres <br>communautaires qui nourrissent votre âme et <br>renforcent vos liens spirituels.</p>
                </div>
            </div>
        </div>
    
        <div class="a_propos">
            <div class="section-image">
                <img src="{{ asset('imgs/a_propos.png') }}" alt="a propos" id="img_propos">
            </div>
            <div class="text_propos">
                <h2>À propos de Notre Entreprise</h2>
                <p>À la participation aux événements associatifs. Nous facilitons <br>
                la connexion entre les associations et les individus en leur <br>offrant un espace pour publier, découvrir et
                réserver des <br> événements variés.</p>
                <p>Que vous soyez intéressé par des <br>conférences, des ateliers,
                des événements sportifs, culturels, <br> religieux ou sociaux, notre
                mission est de vous offrir une <br>expérience enrichissante et
                sans stress.</p>
                <a href="connexion"><button id="creer_evenement">Créer un événement</button></a>
            </div>
        </div>
    
        <div class="container">
            <div id="liste_evenements">
                @foreach($evenements as $evenement)
                    <div class="carte_eve">
                        <div>
                            <img src="{{ asset('storage/images/' . $evenement->image) }}" alt="Image de l'événement">
                        </div>
                        <div>
                            <h2>{{ $evenement->nom }}</h2>
                            <p>{{ $evenement->description }}</p>
                        </div>
                        <div class="infos_evenement">
                            <div class="infos_lateral">
                                <p><i class="fas fa-map-marker-alt icon"></i>{{ $evenement->lieu }}</p>
                                <p><i class="fas fa-calendar-alt icon"></i>Date : {{ $evenement->date }}</p>
                            </div>
                            <div class="infos_lateral">
                                <p><i class="fas fa-clock icon"></i>Date limite d'inscription : {{ $evenement->date_limite_inscription }}</p>
                            </div>
                            <div>
                                <a href="{{ route('evenements.show', $evenement->id) }}">
                                    <button id="bouton_detail">Voir détail</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endsection
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </html>
    