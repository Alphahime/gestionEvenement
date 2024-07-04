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

  .icon{
    margin-top: 10px;
    margin-left: 27px;
  
  }
  .sup{
    margin-left: 29px;

  }

  </style>

  @extends('layouts.dashboardAdmin')
  @section('section')
<div class="tout">
  <h1>Liste des assocations</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">nom</th>
            <th scope="col">description</th>
            <th scope="col">ninea</th>
            <th scope="col">date_creation</th>
            <th scope="col">email</th>
            <th scope="col">secteur</th>
            <th scope="col">contact</th>
            <th scope="col">adresse</th>
            <th scope="col">Supprimer</th>
            <th scope="col">Desactiver</th>
            <th scope="col">Activer</th>
            

          </tr>
        </thead>
        <tbody>
          @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

    @foreach($associations as $association)
          <tr>
            <th scope="row">{{ $association->nom }}</th>
            <td>{{ $association->description }}</td>
            <td>{{ $association->ninea }}</td>
            <td>{{ $association->date_creation }}</td>
            <td>{{ $association->email}}</td>
            <td>{{ $association->secteur }}</td>
            <td>{{ $association->contact }}</td>
            <td>{{ $association->adress }}</td>
            <td>
              {{-- supprimer --}}
                <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $association->id }}').submit();">
                   <div class="sup"><i class="fa-solid fa-xmark" style="color: #c72323;"></i>  </div> 
                </a>
            
                <form id="delete-form-{{ $association->id }}" action="{{ route('association.destroy', ['association' => $association->id]) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
                
                </td> 
                <td>
                    {{-- desactiver une assocation --}}
                  <form action="{{ route('desactivation', $association->id) }}" method="POST">
                    @csrf
                <button type="submit" style="border: none; background-color: transparent;"> 
                 <div class="icon"><i class="fa-solid fa-ban fa-xs" style="color: #d61f1f;"></i>  </div>          
                    </button>
                </form>
                </td>
                <td>
                       {{-- activer --}}
                       <form action="{{ route('activation', $association->id) }}" method="POST">
                        @csrf
                    <button type="submit" style="border: none; background-color: transparent;">
                   <div class="sup"><i class="fa-solid fa-check" style="color: #36bc24;"></i></div> 
                        </button>
                    </form>
                </td>
            
          

          </tr>
          @endforeach
          
        </tbody>
      </table>

    </div>
        
  @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>