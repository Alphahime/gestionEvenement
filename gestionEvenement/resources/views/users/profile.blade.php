<style>
    input{
    border: 1px solid #FFC441;
    width: 660px;
    height: 70px;
    border-radius: 9px;
    margin-top: 30px;
    margin-left: 40px;
  
}
h1{
    text-align: center;
}

.prenom_nom{
    margin-left: 120px;
}

.body{
    margin-top: 100px;
}

.bouton{
    background-color: #FFC441;
    font-family: poppins;
    font-size: 22px;
    border:1px solid #FFC441;
    border-radius: 8px;
    padding: 10px;
    width: 160px;
    margin-left: 155px;
    margin-top: 30px;
   }
</style>
    @extends('layouts.connection')
@section('content')
<div class="body">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <h1>Mon profil</h1>

    
    @if ($user)
    <div class="prenom_nom">
     <input type="text" name="" id="" value="{{ $user->name }}">
     <input type="text" name="" id="" value="{{ $user->nom }}">
    
 <input type="text" name="" id="" value=" {{ $user->email }}">
 <input type="text" name="" id="" value=" {{ $user->telephone}}">
 <input type="text" name="" id="" value=" {{ $user->adresse}}">
 
</div>
 @else
 <p>Vous n'êtes pas connecté.</p>
 @endif
 
 <a href="{{ route('users.edit', ['user' => $user->id]) }}">   
     <button class="bouton">modifier</button>    
 </a>
 
 
 @endsection
  
</div>
   