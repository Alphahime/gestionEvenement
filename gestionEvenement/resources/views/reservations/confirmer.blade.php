<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .popup{
            width: 710px;
            height: 470px;
            top: 240px;
            left: 365px;
            gap: 0px;
            border-radius: 10px;
            opacity: 0px;
             background: rgba(178, 171, 171, 0.17);
            
            text-align: center;
            margin-left: 450px;
            margin-top: 150px

        }
        button{
            height:61px;
            width: 240px;
            margin-top: 250px;
            left: 575px;
            padding: 10px 0px 0px 0px;
            background-color: #FFC441;
            border-radius: 39px ;
            font-size: 26px;
          
        }

       p{
            font-size: 40px;
            /* font-family: poppins; */
            text-align: center;
            margin-left: 20px;
            color: rgba(29, 39, 95, 1);

          
        }
        
    </style>
</head>
<body>
    <section class="contenu">
        <div class="popup">
            <p>Confirmer votre reservation</p>
            {{-- <button>reserver</button> --}}

            {{-- @if(Auth::check())
            <form method="POST" action="{{ route('events.reserver', $evenement->id) }}">
                @csrf
                <input type="hidden" name="evenements_id" value="{{$evenement->id }}">
                <button type="submit" class="btn btn-primary">Réserver</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary">Se connecter pour réserver</a>
        @endif
        </div> --}}

        <form action="{{ route('reservations.store') }}" method="POST">
k            @csrf
            <input type="hidden" name="evenements_id" value="{{ $evenement->id }}">
            <button type="submit" class="btn btn-primary">Réserver ma place</button>
        </form>
        {{-- <button>confimer ma reservation</button> --}}
    </section>
</body>
</html>