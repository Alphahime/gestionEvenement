
            {{-- <div class="card mb-4">
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
            </div> --}}
      <!-- liste_reservation.blade.php -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  {{-- {{-- <link rel="stylesheet" href="path/to/your/custom.css"> --}}
  @extends('layouts.dashboardAssociation')
  @section( 'content')
  
  <style>
    .table{
      background-color: #c72323;
      margin-top: 10px;
      font-family: poppins
    }
    h1{
      text-align: center;
      font-family: poppins;
      font-size: 32px;
      margin:100px;
    }
  
    .tout{
      margin-top: 100px
    }
    </style>
  </head>
  <body>
      <div class="container">
          <h1>Liste des Réservations</h1>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">prenom</th>
                  <th scope="col">Nom Evenement</th>
                  <th scope="col">Date evenement</th>
                  <th scope="col">Lieu evenement</th>
                  <th scope="col">Statut</th>
                  <th scope="col">Action</th>
                  <th scope="col">Supprimer</th>
                </tr>
  
          @foreach ($reservations as $reservation)
  
          <tr>
              <th scope="row">{{ $reservation->user->name }}</th>
              <td>{{ $reservation->evenement->nom }}</td>
              <td>{{ $reservation->evenement->date }}</td>
              <td>{{ $reservation->evenement->lieu }}</td>
              <td>{{ $reservation->status }}</td>
<td>
    @if($reservation->status !== 'refuse')
        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-danger" name="status" value="refuse">Refuser</button>
        </form>
    @else
        <!-- Afficher un message ou un autre contenu si besoin -->
        Réservation déjà refusée
    @endif
</td>
            <td><a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $reservation->id }}').submit();">
                <i class="fa-solid fa-xmark" style="color: #c72323;"></i>  
            </a>
        
            <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservations.destroy', ['reservation' => $reservation->id]) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form></td>

              
          @endforeach
          @if ($reservations->isEmpty())
              <p>Aucune réservation trouvée.</p>
          @endif
      </div>
  </body>
  </html>
  @endsection
  
  
  
  


