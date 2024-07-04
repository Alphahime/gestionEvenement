<link rel="stylesheet" href="{{ asset('css/inscription.css') }}">

<style>
    .composant_bouton{
        margin-top: 20px;
        margin-left: 255px;
    }

    .nom_compet{
        display: inline-block;
        margin-top: 100px;
       
        
        
        
    }

    .vertical{
        margin-left: 250px;
        
     
    }

    select{
    border: 1px solid #FFC441;
    width: 660px;
    height: 70px;
    border-radius: 9px;
    margin-top: 30px;
    margin-left: 40px;
    align-items: center;
   
  
}
.vertical{
    margin-top: 20px;
}

.vertical label{
     display: flex;
     margin-left: 50px;
     margin-bottom: -10px;
   }

   form{
    background-color: aliceblue;
    height: 350px;
    margin-top: 100px;
    width: 1100px;
    margin-left: 73px;
   
    
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1) 
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
    
    <form action="#" method="POST">
        @csrf
        @method('PUT') <!-- Utilisation de la méthode PUT pour la mise à jour -->
    
        <div class="vertical">
            <label for="role">Rôle :</label>
            <select name="role_id" id="role">
                @foreach($role as $r)
                    <option value="{{ $r->id }}" {{ $r->id == $role->id ? 'selected' : '' }}>{{ $r->name }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="vertical">
            <label for="permission">Permission :</label>
            <select name="permission_id" id="permission">
                @foreach($permissions as $p)
                    <option value="{{ $p->id }}" {{ $p->id == $permission->id ? 'selected' : '' }}>{{ $p->name }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="composant_bouton">
            <input class="bouton" type="submit" value="Modifier">
        </div>
    </form>
    
    @endsection