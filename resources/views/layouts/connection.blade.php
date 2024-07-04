

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/connection.css')}}">
    <title>Document</title>
  <style>
    .custom-border-radius{
        border-radius: 60px;
    }
    .nav{
        margin-top: 20px;
       
    }

   
    </style>  
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
           <ul class="navbar">
            <a href="landing">
                <div>
                    <li>Événéments</li>
                </div>
            </a>
            <a href="{{ route('evenements.create') }}"> <div>
                <li>Créer</li>
            </div></a>
               
                <div>
                    <li>A propos</li>
                </div>
                <a href="mes_reservations"> 
                <div>
                    <li>Mes réservations</li>
                </div>
                 </a>
                
                </ul>
           
            <div class="nav2">
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" id="deconnection">Déconnexion</button>
                </form>
                </div>

          
            </div>
            <a href="profil_user">
                <div class="profil">
                    <li>Profil</li>
                </div>
                 </a>
           

        </nav>
        </div>
            
            
    </div>
    </header>
    
    <main> @yield('content')</main>
   
    

    


   
</body>
</html>
