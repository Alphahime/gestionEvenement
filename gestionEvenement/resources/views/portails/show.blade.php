<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/details.css')}}">
    <title>Détail Événement</title>
</head>
<body>
    <div class="banniere">
        <img src="{{ asset('imgs/a_propos.png')}}" alt="Bannière">
    </div>

    <div class="container">
        <h1>{{ $evenement->nom }}</h1>
        <p>Date début: {{ $evenement->date }}</p>
        <p>Date limite inscription: {{ $evenement->date_limite_inscription }}</p>
        <p>Lieu: {{ $evenement->lieu }}</p>
        <p>Organisateur: {{ $evenement->association->nom }}</p>
        <p>Nombre de places: {{ $evenement->nombre_place }}</p>
        <p>Description: {{ $evenement->description }}</p>

        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <input type="hidden" name="evenements_id" value="{{ $evenement->id }}">
            <button type="submit" class="btn btn-primary">Réserver ma place</button>
        </form>
    </div>

    <!-- The custom popup -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <p>Êtes-vous sûr de vouloir réserver votre place ?</p>
            <div class="popup-buttons">
                <button class="popup-button confirm" onclick="closePopup(true)">Confirmer</button>
                <button class="popup-button cancel" onclick="closePopup(false)">Annuler</button>
            </div>
        </div>
    </div>
    <script>
        function confirmReservation() {
            // Show the custom popup
            document.getElementById('popup').style.display = 'flex';
            return false; // Prevent the default link behavior
        }

        function closePopup(confirm) {
            // Hide the custom popup
            document.getElementById('popup').style.display = 'none';

            if (confirm) {
                // If the user confirmed, submit the reservation
                window.location.href = document.getElementById('bouton_reserver').href;
            }
        }
    </script>
</body>
</html>
