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
  .container{
         display:flex;
         width: 1190px;
         height: 260px;
         margin-left: 260px;
         border: #Ce0033;
         border: 1px solid rgba(255, 196, 65, 1);
         margin-top: 30px;
         box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
         border-radius: 12px
         
        
     }
     .paragraphe h3{
        
       
        color: #FFC441;
         font-family: Montserrat;
         margin-left: 28px;
        
     }
     .container img{
         width: 180px;
         height: 180px;
         border-radius: 50%;
         margin-top:25px ;
         margin-left: 40px;
     }
     .container h2{
         color: #Ce0033;
         text-align: center;
         font-family: Montserrat;
     }
     .container p{
         margin-left: 30px;
         font-size: 22px;
         text-align: justify;
         font-family: Montserrat;
     }
     .paragraphe{
      margin-top: 30px;
      margin-left: 70px;
     }
   
 </style>  
</head>
<body>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif


  <h2 id="title">Mes Réservations</h2>
  @foreach($reservations as $reservation)
<div class="container @if($reservation->status === 'refuse') border border-danger @endif">
  <img class="img" src="{{ asset('storage/images/' . $reservation->evenement->image) }}" class="w-full h-48 object-cover rounded-t-lg" alt="{{ $reservation->evenement->nom }}">
  <div  class="paragraphe">
    <h3 class="card-title">Nom: {{ $reservation->evenement->nom }}</h3>   
    <p class="card-text">Date: {{ $reservation->evenement->date }}</p>
    <p class="card-text">Date d'inscription: {{ $reservation->created_at }}</p>
    <p class="card-text">Status: {{ $reservation->status }}</p>
</div>
</div>

@endforeach
@endsection
</body>
</html>