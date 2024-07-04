

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/connection.css')}}">
    <title>Document</title>
    
</head>
<body>
   
    <header>

    <div class="topbar">
        <div>
            <img src="{{ asset('imgs/logo.png')}}" alt="Logo senevent's" id="logo">
        </div>
        <div>
        <nav class="nav">
            <div class="nav1">
            <a href="#"><ul class="navbar">
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
                    <li>Mes réservations</li>
                </div>
                
                </ul>
            </a>

            <div class="nav2">
            <div>
                 <button id="deconnection">Deconnection</button>
                </div>
            <div>
                <img src="{{ asset('imgs/atelier')}}" alt="image_user">
            </div>
            </div>

        </nav>
        </div>
            
            
    </div>
    </header>
    
    <main> @yield('content')</main>
   
    

    


   
</body>
</html>
