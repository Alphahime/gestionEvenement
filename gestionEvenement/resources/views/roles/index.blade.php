<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="path/to/your/custom.css">
<style>
    .tout{
        margin-top: 120px;
    }

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

  
    
   
</style>
@extends('layouts.dashboardAdmin')
  @section('section')

  <div class="tout">
    <h1>Liste des assocations</h1>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Role</th>
              <th scope="col">Permission</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($roles as $role)
                <tr>
                    <th>{{ $role->name }}</th>
                    <td>
                        @foreach($role->permissions as $permission)
                            {{ $permission->name }}@if(!$loop->last), @endif
                        @endforeach
                    </td>

                    <td>
                            <!-- Bouton de suppression avec le formulaire -->
                            <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rôle ?')">  
                                     <i class="fa-solid fa-xmark" style="color: #c72323;"></i>   
                                </button>
                            </form>
                            <a href="{{ route('role.edit', ['role' => $role->id]) }}">       
                             <i class="fa-solid fa-pen-to-square" style="color: #63E6BE;"></i> 
                            </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
  
      </div>
          
    @endsection
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  