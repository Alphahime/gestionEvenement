<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Detail Evenement</title>
</head>
<body>
    
@foreach($evenements as $evenement)

<img src="{{ asset('imgs/a_propos.png')}}" alt="" id="img_detail">
    
    <div class="section1">
    
        <div class="infos_detail">
            <p id="infos_detail1"> Date début:{{ $evenement->date}}</p>
            <p id="infos_detail1">Date limite inscription::{{ $evenement->date_limite_inscription}}</p>
            <p id="infos_detail1"> Lieu{{ $evenement->lieu}}</p>
            <p id="infos_detail1"> Organisateur:{{ $evenment->association->nom}}</p>
            <p id="infos_detail1"> Nombre de places:{{ $evenement->nombre_place}}</p>
        </div>
        <div>
            <h2>Titre</h2>
            <h3>Description Événément</h3>
            <p>{{ $evenement->description}}</p>

           
            <a href="" id="bouton_reserver">Reserver ma place</a>
        </div>
    </div>

    @endforeach
    
</body>
</html>