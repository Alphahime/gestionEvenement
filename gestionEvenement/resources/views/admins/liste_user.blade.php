<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="path/to/your/custom.css">
<style>
  .table{
    background-color: #c72323;
    margin-top: 20px;
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
@extends('layouts.dashboardAdmin')
@section('section')
<div class="tout">

    <h1>Liste des utilisateurs</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th scope="col">Telephone</th>
            <th scope="col">Action</th>
            

          </tr>
        </thead>
        <tbody>

    @foreach($users as $user)
          <tr>
            <th scope="row">{{ $user->name }}</th>
            <td>{{ $user->nom}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->adresse}}</td>
            <td>{{ $user->telephone}}</td>

           <td>
                <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                  <i class="fa-solid fa-xmark" style="color: #c72323;"></i>                </a>
            
                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td> 
             
            
          </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
