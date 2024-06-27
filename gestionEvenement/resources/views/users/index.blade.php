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
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th scope="col">Telephone</th>
            <th scope="col">supprimer</th>
            <th scope="col">modifier</th>

          </tr>
        </thead>
        <tbody>

    @foreach($users as $user)
          <tr>
            <th scope="row">{{ $user->prenom }}</th>
            <td>{{ $user->nom}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->adresse}}</td>
            <td>{{ $user->telephone}}</td>

            <td>
                <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                    Supprimer
                </a>
            
                <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
            
            <td>
                <a href="{{ route('users.edit', ['user' => $user->id]) }}">Modifier</a>

            </td>            
            
          </tr>
          @endforeach
          
        </tbody>
      </table>
        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>