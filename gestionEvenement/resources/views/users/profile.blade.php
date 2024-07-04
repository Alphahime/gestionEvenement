@extends('layouts.connection')

@section('title', 'Profil de l\'utilisateur')

@section('content')
    <h1>Profil de l'utilisateur</h1>

    @if ($user)
        <p>Nom : {{ $user->name }}</p>
        <p>Email : {{ $user->email }}</p>
        <p>Telephone : {{ $user->telephone}}</p>
        <p>Adresse : {{ $user->adresse}}</p>

    @else
        <p>Vous n'êtes pas connecté.</p>
    @endif

    <!-- Formulaire de déconnexion -->
   {{-- <a href="{{ route('users.edit') }}"></a> --}}
   <a href="{{ route('users.edit', ['user' => $user->id]) }}">   
    <button>modifier</button>    
   </a>
@endsection
