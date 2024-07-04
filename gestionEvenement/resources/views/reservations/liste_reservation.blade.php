<!-- liste_reservation.blade.php -->

@extends('layouts.dashboardAssociation')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/reservation.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Liste des Réservations</h1>

        @foreach ($reservations as $reservation)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Réservation de {{ $reservation->user->name }}</h5>
                    <p class="card-text">
                        <strong>Événement:</strong> {{ $reservation->evenement->nom }}<br>
                        <strong>Date de l'événement:</strong> {{ $reservation->evenement->date }}<br>
                        <strong>Lieu:</strong> {{ $reservation->evenement->lieu }}<br>
                        <strong>Statut:</strong> {{ $reservation->status }}
                    </p>
                    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="status">Statut de la réservation:</label>
                            <select name="status" id="status" class="form-control">
                                <option value="en attente" {{ $reservation->status === 'en attente' ? 'selected' : '' }}>En attente</option>
                                <option value="acceptée" {{ $reservation->status === 'acceptée' ? 'selected' : '' }}>Acceptée</option>
                                <option value="refusée" {{ $reservation->status === 'refusée' ? 'selected' : '' }}>Refusée</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
            </div>
        @endforeach

        @if ($reservations->isEmpty())
            <p>Aucune réservation trouvée.</p>
        @endif
    </div>
</body>
</html>


{{-- <div id="popup" class="popup">
    <div class="popup-content">
        <p>Êtes-vous sûr de vouloir réserver votre place ?</p>
        <div class="popup-buttons">
            <button class="popup-button confirm" onclick="closePopup(true)">Confirmer</button>
            <button class="popup-button cancel" onclick="closePopup(false)">Annuler</button>
        </div>
    </div>
</div>
<script>
    function confirmReservation() { --}}
        {{-- // Show the custom popup
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
    } --}}
{{-- </script> --}}

