<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Association</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>

        body{
            font-family: poppins;
        }
        .sidebar {
            background-color: #08143F;
            border-radius: 1rem;
            width: 350px;
            overflow-y: scroll
        }

        .sidebar a {
            color: #ffffff;
            font-size: 20px;
            font-weight: 600;
        }

        .sidebar a:hover {
            background-color: #FFC441;
            color: #08143F;
        }

        .sidebar .icon {
            color: #FFC441;
        }

        .h-12 {
            width: 100px;
            height: 100px;
        }

        .logout {
            margin-top: 30rem;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <div class="sidebar bg-gray-800 text-gray-100 py-4 px-6">
            <div class="flex items-center justify-center">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('imgs/logo.png') }}" alt="Logo de l'association" class="h-12">
                </div>            
            </div>
            <ul class="mt-6">
                <li class="mb-4">
                    <a href="#" class="block py-2 px-4 w-full hover:bg-yellow-500 hover:text-white">
                        <i class="fas fa-tachometer-alt mr-2 icon"></i> Tableau de bord
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('association.index') }}" class="block py-2 px-4 w-full hover:bg-yellow-500 hover:text-white">
                        <i class="fas fa-calendar-alt mr-2 icon"></i> les Associations
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ url('evenements_admin') }}" class="block py-2 px-4 w-full hover:bg-yellow-500 hover:text-white">
                        <i class="fas fa-plus-circle mr-2 icon"></i> Les evenements
                    </a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('admin.index') }}" class="block py-2 px-4 w-full hover:bg-yellow-500 hover:text-white">
                        <i class="fas fa-list-alt mr-2 icon"></i> les utilisateurs
                    </a>
                </li>

                <li class="mb-4">
                    <a href="{{ route('role.create') }}" class="block py-2 px-4 w-full hover:bg-yellow-500 hover:text-white">
                        <i class="fas fa-list-alt mr-2 icon"></i> Ajouter un role
                    </a>
                </li>

                <li class="mb-4">
                    <a href="{{ route('role.index') }}" class="block py-2 px-4 w-full hover:bg-yellow-500 hover:text-white">
                        <i class="fas fa-list-alt mr-2 icon"></i> liste des roles
                    </a>
                </li>
            </ul>
            <div class="logout">
                <a href="{{ route('logout') }}" class="block py-2 px-4 hover:bg-yellow-500 hover:text-white">
                    <i class="fas fa-sign-out-alt mr-2 text-yellow-500"></i> Déconnexion
                </a>
            </div>
        </div>
        <div class="flex-1 p-6">
            @yield('section')
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>
