
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Association</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <style>
        .deconnexion{
            margin-left: 28px
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <div class="sidebar bg-gray-800 text-gray-100 py-4 px-6">
            <div class="flex items-center justify-center">
                <img src="{{ asset('imgs/logo.png') }}" alt="Logo de l'association" class="h-12">
            </div> 
            <ul class="mt-6">
                <li class="mb-4">
                    <a href="#" class="block py-2 px-4 w-full hover:bg-yellow-500 hover:text-white">
                        <i class="fas fa-tachometer-alt mr-2 icon"></i> Tableau de bord
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('evenements.index') }}" class="block py-2 px-4 w-full hover:bg-yellow-500 hover:text-white">
                        <i class="fas fa-calendar-alt mr-2 icon"></i> Liste des événements
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('evenements.create') }}" class="block py-2 px-4 w-full hover:bg-yellow-500 hover:text-white">
                        <i class="fas fa-plus-circle mr-2 icon"></i> Ajouter événement
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('reservations.index') }}" class="block py-2 px-4 w-full hover:bg-yellow-500 hover:text-white">
                        <i class="fas fa-list-alt mr-2 icon"></i> Voir les réservations
                    </a>
                </li>
            </ul>
          <div class="deconnexion">
            <a href="{{ url('deconnexion') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt mr-2 text-yellow-500"></i> Déconnexion
            </a>
            <form id="logout-form" action="{{ url('deconnexion') }}" method="POST" style="display: none;">
                @csrf 
            </form>
          </div>
            
        </div>
        <div class="flex-1 p-6">
            @yield('content')
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>

