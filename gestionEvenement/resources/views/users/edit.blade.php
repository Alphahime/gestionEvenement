<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/inscription.css') }}">
</head>
<body>
    <h1>Formulaire d'inscription</h1>
    <h3 style="text-align: center">s'inscrire avec :</h3>

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="reseau">
            <div class="input-container">
                <i class="fab fa-facebook icon"></i>
                <input type="text" placeholder="Facebook" name="facebook" id="facebook" value="{{ old('facebook', $user->facebook) }}">
            </div>
            <div class="input-container">
                <i class="fab fa-twitter icon"></i>
                <input type="text" placeholder="Twitter" name="twitter" id="twitter" value="{{ old('twitter', $user->twitter) }}">
            </div>
            <div class="input-container">
                <i class="fab fa-instagram icon"></i>
                <input type="text" placeholder="Instagram" name="instagram" id="instagram" value="{{ old('instagram', $user->instagram) }}">
            </div>
        </div>
        <div class="nom_compet">
            <div class="form">
                <div class="vertical">
                    <label for="prenom">Prenom</label>
                    <input type="text" placeholder="prenom" name="prenom" value="{{ old('prenom', $user->prenom) }}">
                </div>
                @error('prenom')
                <div class="alert alert-succes">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form">
                <div class="vertical">
                    <label for="nom">Nom</label>
                    <input type="text" placeholder="nom" name="nom" value="{{ old('nom', $user->nom) }}">
                </div>
                @error('nom')
                <div class="alert alert-succes">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="nom_compet">
            <div class="form">
                <div class="vertical">
                    <label for="telephone">telephone</label>
                    <input type="text" placeholder="telephone" name="telephone" value="{{ old('telephone', $user->telephone) }}">
                </div>
                @error('telephone')
                <div class="alert alert-succes">{{ $message }}</div>
                @enderror
            </div>

            <div class="form">
                <div class="vertical">
                    <label for="email">email</label>
                    <input type="email" placeholder="ndeye@gmail.com" name="email" value="{{ old('email', $user->email) }}">
                </div>
                @error('email')
                <div class="alert alert-succes">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="nom_compet">
            <div class="form">
                <div class="vertical">
                    <label for="adress">adress</label>
                    <input type="text" placeholder="adress" name="adresse" value="{{ old('adresse', $user->adresse) }}">
                </div>
                @error('adresse')
                <div class="alert alert-succes">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="composant_bouton">
            <input class="bouton" type="submit" value="Modifier">
        </div>
    </form>
    <div class="question">
        <hr class="costum_hr">
        <p>vous n'avez pas de compte? <a href="{{ route('authuser.create') }}">s'inscrire</a></p>
    </div>
</body>
</html>
