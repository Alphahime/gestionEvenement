<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Mes Reservations</title>
    @extends('layouts.connection')
@section('content')

    <style>
      .card{
        margin-top: 30px;
        

      }
      body{
        font-family: poppins;
        font-size: 20px
      }
    </style>
</head>
<body>




  <h2 id="title">Mes Réservations</h2>
@foreach($reservations as $reservation)
<div class="card @if($reservation->status === 'refuse') border-danger @endif" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ $reservation->evenement->image }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Nom: {{ $reservation->evenement->nom }}</h5>
        <p class="card-text">Date: {{ $reservation->evenement->date }}</p>
        <p class="card-text">Date d'inscription: {{ $reservation->created_at }}</p>
        <p class="card-text">Status: {{ $reservation->status }}</p>
      </div>
    </div>
  </div>
</div>


@endforeach
@endsection
</body>
</html>