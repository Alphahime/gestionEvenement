@extends('layouts.acceuil')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Page d'Acceuil</title>
</head>
<body>
    <div class="banniere">
        <div>
            <img src="{{ asset('imgs/a_propos.png') }}" alt="banniere" id="img_ban">
        </div>
        <div class="text_ban">
            <h2>Découvrez et participez aux <br>événements incontournables près <br> de chez vous !</h2>
            <p>Des événements inspirantes aux fetes inoubliables, tout <br>est à portée de main ! Elle permet aux associations de <br> publier facilement leurs événements et aux utilisateurs de <br>réserver rapidement.</p>
            <button id="bouton_inscription">Inscription</button>
        </div>
    </div>
    <div class="carte">
    <div class="carte1">
        <div>
            <img src="{{ asset('imgs/atelier.png') }}" alt="">
        </div>
        <div>
            <H2>Festival</H2>
        </div>
        <div>
            <p>Réservez votre place et participez à des <br> cérémonies, des conférences et des rencontres <br>communautaires qui nourrissent votre âme et <br>renforcent vos liens spirituels.</p>
        </div>
    </div>
    <div class="carte2">
        <div>
            <img src="{{ asset('imgs/atelier.png') }}" alt="">
        </div>
        <div>
            <H2>Atelier</H2>
        </div>
        <div>
            <p> Réservez votre place et participez à des <br> cérémonies, des conférences et des rencontres <br>communautaires qui nourrissent votre âme et <br>renforcent vos liens spirituels.</p>
        </div>
    </div>
    <div class="carte3">
        <div>
            <img src="{{ asset('imgs/atelier.png') }}" alt="">
        </div>
        <div>
            <H2>Conference</H2>
        </div>
        <div>
            <p>Réservez votre place et participez à des <br> cérémonies, des conférences et des rencontresc <br>ommunautaires qui nourrissent votre âme et <br>renforcent vos liens spirituels.</p>
        </div>
    </div>
    </div>
    <div>
    <div class="a_propos">
        <div>
            <img src="{{ asset('imgs/a_propos.png') }}" alt="a propos" id="img_propos">
        </div>
        <div class="text_propos">
        <div>
            <h2>A propos de Notre Entreprise</h2>
        </div>
        <p>A la participation aux événements associatifs. Nous facilitons <br>
la connexion entre les associations et les individus en leur <br>offrant un espace pour publier, découvrir et
réserver des <br> événements variés.

Que vous soyez intéressé par des <br>conférences, des ateliers,
des événements sportifs, culturels, <br> religieux ou sociaux, notre
mission est de vous offrir une <br>expérience enrichissante et
sans stress.</p>
<button id="creer_evenement">Creer un événement</button>
    </div>
    </div>
     
    </div>
    @foreach($evenements as $evenement)
    <div>
        <h1 id="h1_evenement">Evenements à Venir</h1>
    </div>
    <div class="carte_eve">
        <div class="carte1_eve">
            <div>
                <img src="{{ $evenement->image}}" alt="">
            </div>
            <div>
                <h2>{{ $evenement->nom}}</h2>
            </div>
            <div>
            <p>Que vous soyez intéressé par des conférences, des <br>Que vous soyez intéressé par des conférences, des <br>
        ateliers,  des événements sportifs, culturels, <br>
        religieux ou sociaux, notre mission est d....</p>
            </div>
        <div>
            <div class="infos_evenement1">
            <div class="lieu">
                <div>

                </div>
                <div id="infos1">
                    <p>{{ $evenement->lieu}}</p>
                </div>
            </div>
            <div>
            <div id="infos2">
               <p>{{ $evenement->date}}</p>
            </div>
            </div>
            </div>
            <div id="infos3">
                <p>date limite inscription :{{ $evenement->date_limite_inscription}}</p>
            </div>
            <div>
               
              <a href="{{ url('evenements/{evenement}')}}">
             
             <button id="bouton_detail">Voir detail</button>
             </a>
             
            </div>
        </div>
    </div>
    @endforeach
   
</body>
</html>