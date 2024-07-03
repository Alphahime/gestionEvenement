

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Document</title>
    
</head>
<body>
   
    <header class="topbar">
        <img src="{{ asset('imgs/logo.png')}}" alt="Logo senevent's" id="logo">
    <nav class="nav">
        <ul class="navbar">
            <div>
                <li>Événéments</li>
            </div>
            <div>
                <li>Créer</li>
            </div>
            <div>
                <li>A propos</li>
            </div>
            <div>
                <li>Contact</li>
            </div>
            
        </ul>
        <div>
            <button id="connection">Connection</button>
        </div>
       
    </nav>
    </header>
    @yields('body')
    

    <footer class="footer">
        <div class="footer1">
            <div>
                <img src="{{ asset('imgs/logo.png')}}" alt="logo">
            </div>
            <div>
                <input type="text" id="input">
                <button id="sinscrire">S'inscrire</button>
            </div>
           
        </div>
        <hr id="hr1">
        <div class="footer2">
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
               <a href="#"><ion-icon name="logo-youtube" id="youtube"></ion-icon></a> 
               <a href="#"> <span><ion-icon name="logo-facebook" id="facebook"></ion-icon></span></a> 
               <a href="#"> <ion-icon name="logo-twitter" id="twitter"></ion-icon></a> 
               <a href="#"> <ion-icon name="logo-instagram" id="instagram"></ion-icon></a> 
               <a href="#"><ion-icon name="logo-linkedin" id="linkedin"></ion-icon></a> 
            </div>
       
           
            </div>
            <hr id="hr2">
          <strong><p id="copyright">senevents @ 2024 tout droits reservés</p></strong>  
       
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>