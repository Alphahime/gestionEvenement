<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Ajouter Role</title>

</head>
<body  class="container">
    <div class="container mt-5">
        <h1 id="h1_ajout_role">Ajouter un Role</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('') }}" method="post" class="form">
            @csrf
           
               
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom_role" >
                </div>
            

            

                <div class="mb-3">
                    <label for="permission" class="form-label">Permission</label>
                    <input type="text" class="form-control" name="permission" id="permission" >
                   
                </div>

            

            
           
            <button type="submit" class="btn btn-warning" id="ajouter_role">Ajouter</button>
        </form>
    </div>
</body>
</html>
