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
    <h1>Liste des evenements</h1>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">nom</th>
              <th scope="col">Date</th>
              <th scope="col">Lieu</th>
              <th scope="col">Description</th>
              <th scope="col">Nombre de place</th>
              <th scope="col">Date lime inscription</th>
              {{-- <th scope="col">Association</th> --}}
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
  
      @foreach($evenements as $evenement)
            <tr>
              <th scope="row">{{ $evenement->nom }}</th>
              <td>{{ $evenement->date }}</td>
              <td>{{ $evenement->lieu }}</td>
              <td>{{ $evenement->description }}</td>
              <td>{{ $evenement->nombre_place }}</td>
              <td>{{ $evenement->date_limite_inscription }}</td>
              <td>
                <a href="supprimer_evenement/{{   $evenement->id}}"><i class="fa-solid fa-xmark" style="color: #c72323;"></i>  
                </a>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
  
      </div>
          
    @endsection
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     