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
            <img src="{{ asset('imgs/a_propos.png') }}" alt="banniere">
        </div>
        <div>
            <h2>Découvrez et participez aux événements incontournables près de chez vous !</h2>
            <p>Des événements inspirantes aux fetes inoubliables, tout est à portée de main ! Elle permet aux associations de publier facilement leurs événements et aux utilisateurs de réserver rapidement.</p>
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
            <p>Réservez votre place et participez à des <br> cérémonies, des conférences et des rencontrescommunautaires qui nourrissent votre âme etrenforcent vos liens spirituels.</p>
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
            <p> Réservez votre place et participez à des <br> cérémonies, des conférences et des rencontrescommunautaires qui nourrissent votre âme etrenforcent vos liens spirituels.</p>
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
            <p>Réservez votre place et participez à des <br> cérémonies, des conférences et des rencontrescommunautaires qui nourrissent votre âme etrenforcent vos liens spirituels.</p>
        </div>
    </div>
    </div>
    <div>
    <div class="a_propos">
        <div>
            <img src="{{ asset('imgs/a_propos.png') }}" alt="a propos">
        </div>
        <div>
        <div>
            <h2>A propos de Notre Entreprise</h2>
        </div>
        <p>à la participation aux événements associatifs. Nous facilitons
la connexion entre les associations et les 

individus en leur offrant un espace pour publier, découvrir et
réserver des événements variés.

Que vous soyez intéressé par des conférences, des ateliers,
des événements sportifs, culturels, religieux ou sociaux, notre
mission est de vous offrir une expérience enrichissante et
sans stress.</p>
<button id="creer_evenement">Inscription</button>
    </div>
    </div>
    <div>
        <button>Creer un événement</button>
    </div>
    </div>

    <div>
        <h1>Evenements à Venir</h1>
    </div>
    <div class="carte_eve">
        <div class="carte1_eve">
            <div>
                <img src="{{ asset('imgs/coran.png') }}" alt="">
            </div>
            <div>
                <h2>Recital coranique</h2>
            </div>
            <div>
            <p>Que vous soyez intéressé par des conférences, des Que vous soyez intéressé par des conférences, des
        ateliers, des événements sportifs, culturels,
        religieux ou sociaux, notre mission est d....</p>
            </div>
        <div>
            <div>
                <input type="text">
            </div>
            <div>
                <input type="text">
            </div>
            <div>
                <input type="text">
            </div>
            <div>
                <button>Voir detail</button>
            </div>
        </div>
    </div>
    <div class="carte2_eve">
        <div>
            <img src="{{ asset('imgs/festival.png') }}" alt="">
        </div>
        <div>
            <h2>Recital coranique</h2>
        </div>
        <div>
        <p>Que vous soyez intéressé par des conférences, des Que vous soyez intéressé par des conférences, des
    ateliers, des événements sportifs, culturels,
    religieux ou sociaux, notre mission est d....</p>
        </div>
        <div>
            <div>
                <input type="text">
            </div>
            <div>
                <input type="text">
            </div>
            <div>
                <input type="text">
            </div>
            <div>
                <button>Voir detail</button>
            </div>
        </div>
        </div>
        <div class="carte3_eve">
            <div>
                <img src="{{ asset('imgs/ban.png') }}" alt="">
            </div>
            <div>
                <h2>Recital coranique</h2>
            </div>
            <div>
            <p>Que vous soyez intéressé par des conférences, des Que vous soyez intéressé par des conférences, des
        ateliers, des événements sportifs, culturels,
        religieux ou sociaux, notre mission est d....</p>
            </div>
            <div>
                <div>
                    <input type="text">
                </div>
                <div>
                    <input type="text">
                </div>
                <div>
                    <input type="text">
                </div>
                <div>
                    <button>Voir detail</button>
                </div>
            </div>
    </div>
    </div>
</body>
</html>