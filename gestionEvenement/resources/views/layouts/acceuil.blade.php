@extends('layouts.acceuil')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Document</title>
    
</head>
<body>
    <header>
        <img src="" alt="Logo senevent's">
    <nav>
        <ul>
            <li>Événéments</li>
            <li>Créer</li>
            <li>A propos</li>
            <li>Contact</li>
        </ul>
        <button>Connection</button>
    </nav>
    </header>

@yield('contenu')
    <footer>
        <div>
            <div>
                <img src="" alt="">
            </div>
            <div>
                <input type="text">
            
            </div>
            <div>
                <button>S'inscrire</button>
            </div>
        </div>
        <hr>
        <div>
            <div>
                <h2>A propos</h2>
                <p>Création d'événement</p>
                <p>Trouver des événements</p>
                <p>A propos</p>
            </div>
            <div>
                <h2>Contact</h2>
                <p>Adresse: Dakar,Mermoz</p>
                <p>E-mail:senevents@gmail.com</p>
                <p>Téléphone: 77 000 00 00</p>
            </div>
            <div>
                <h2>Politique de Confidentialité</h2>
                <p>Centre d'aide</p>
            </div>
            <div>
                <h2>Réseaux Sociaux</h2>
            </div>
        </div>
    </footer>
</body>
</html>