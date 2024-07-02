<link rel="stylesheet" href="{{ asset('css/inscription.css') }}">
<style>
    .composant_bouton{
        margin-top: 20px;
        margin-left: 55px;
    }
</style>
@extends('layouts.dashboardAdmin')
  @section('section')
    <h1>Formulaire d'inscription</h1>
    <h3 style="text-align: center">s'inscrire avec :</h3>

    @if(session ('status'))
    <div class="alert alert-success">
        {{ session ('status') }}
    </div>
    @endif
    
    <form action="{{ url('role') }}" method="post">
        @csrf
            <label for="name">Nom</label>
            <input type="text" placeholder="name" name="name">
            @error('name')
            <div class="alert alert-succes">{{ $message }}</div>    
            @enderror
            <div class="composant_bouton">
                <input class="bouton" type="submit" value="soumettre">
            </div> 
    </form>
    @endsection