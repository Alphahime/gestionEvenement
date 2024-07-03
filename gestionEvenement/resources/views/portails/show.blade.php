<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Détail Événement</title>
</head>
<body>
    <div class="banniere">
        <img src="{{ asset('imgs/a_propos.png')}}" alt="Bannière">
    </div>

    <div class="container">
        <div class="section1">
            <div class="infos_detail">
                <div class="card-info">
                    <p><strong>Date début:</strong> {{ $evenement->date }}</p>
                </div>
                <div class="card-info">
                    <p><strong>Date limite inscription:</strong> {{ $evenement->date_limite_inscription }}</p>
                </div>
                <div class="card-info">
                    <p><strong>Lieu:</strong> {{ $evenement->lieu }}</p>
                </div>
                <div class="card-info">
                    <p><strong>Organisateur:</strong> {{ $evenement->association->nom }}</p>
                </div>
                <div class="card-info">
                    <p><strong>Nombre de places:</strong> {{ $evenement->nombre_place }}</p>
                </div>
            </div>
            <div class="description">
                <h2>{{ $evenement->nom }}</h2>
                <h3>Description Événement</h3>
                <p>{{ $evenement->description }}</p>
                <a href="{{ route('reservations.create', ['evenement' => $evenement->id]) }}" id="bouton_reserver" onclick="return confirmReservation()">Réserver ma place</a>
            </div>
        </div>
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
