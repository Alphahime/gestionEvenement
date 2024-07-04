<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
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
            <th scope="col">supprimer</th>
            <th scope="col">modifier</th>

          </tr>
        </thead>
        <tbody>

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
                <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $association->id }}').submit();">
                    Supprimer
                </a>
            
                <form id="delete-form-{{ $association->id }}" action="{{ route('association.destroy', ['association' => $association->id]) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>           

            <td><a href="{{ route('association.edit', ['association' => $association->id]) }}">Modifier</a></td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
        
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
