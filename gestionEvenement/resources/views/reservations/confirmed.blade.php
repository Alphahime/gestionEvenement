<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservations Confirmées</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Réservations Confirmées</h1>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200">Nom de l'utilisateur</th>
                    <th class="py-2 px-4 bg-gray-200">Email</th>
                    <th class="py-2 px-4 bg-gray-200">Nom de l'événement</th>
                    <th class="py-2 px-4 bg-gray-200">Date de réservation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $reservation->user->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $reservation->user->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $reservation->evenement->nom }}</td>
                    <td class="py-2 px-4 border-b">{{ $reservation->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
