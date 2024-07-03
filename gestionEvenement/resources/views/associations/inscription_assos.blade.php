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

    @if(session ('status'))
    <div class="alert alert-success">
        {{ session ('status') }}
    </div>
    @endif
    
    <form action="{{ url('association') }}" method="post">
        @csrf
        <div class="reseau">
            <div class="input-container">
                <i class="fab fa-facebook icon"></i>
                <input type="text" placeholder="Facebook" name="facebook" id="facebook">
               
            </div>
            <div class="input-container">
                <i class="fab fa-twitter icon"></i>
                <input type="text" placeholder="Twitter" name="twitter" id="twitter">
               
            </div>
            <div class="input-container">
                <i class="fab fa-instagram icon"></i>
                <input type="text" placeholder="Instagram" name="instagram" id="instagram">
            </div>
        </div>
        <div class="element_compet">
            {{-- nom --}}
            <div class="form">
                <div class="vertical">
                    <label for="nom">nom</label>
                    <input type="text" placeholder="nom" name="nom">
                </div>
                @error('nom')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>
            {{-- logo --}}
        
            <div class="form">
                <div class="vertical">
                    <label for="logo">logo</label>
                    <input type="text" placeholder="logo" name="logo">
                </div>
                @error('logo')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>
            {{-- date --}}
             <div class="form">
                <div class="vertical">
                    <label for="date_creation">date_creation</label>
                    <input type="date" placeholder="date_creation" name="date_creation">
                </div>
                @error('date_creation')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>
        </div>

        <div class="nom_compet">
            <div class="form">
                <div class="vertical">
                    <label for="contact">contact</label>
                    <input type="text" placeholder="contact" name="contact">
                </div>
                @error('contact')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>

            <div class="form">
                <div class="vertical">
                    <label for="adresse">adresse</label>
                    <input type="adresse" placeholder="adresse" name="adresse">
                </div>
                @error('adresse')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>
        </div>

        <div class="nom_compet">
            <div class="form">
                <div class="vertical">
                    <label for="secteur_activite">secteur_activite</label>
                    <input type="text" placeholder="secteur_activite" name="secteur_activite">
                </div>
                @error('secteur_activite')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>

            <div class="form">
                <div class="vertical">
                    <label for="ninea">ninea</label>
                    <input type="password" placeholder="ninea" name="ninea">
                </div>
                @error('mdp')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>
        </div>


        <div class="nom_compet">
            <div class="form">
                <div class="vertical">
                    <label for="email">email</label>
                    <input type="text" placeholder="email" name="email">
                </div>
                @error('email')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>

            <div class="form">
                <div class="vertical">
                    <label for="mdp">mdp</label>
                    <input type="password" placeholder="mdp" name="password">
                </div>
                @error('mdp')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>
        </div>
        <div class="vertical">
            <label for="description">Description</label>
            <textarea name="description" id="dscription" cols="165" rows="10" placeholder="description"></textarea>

        </div>

        <div class="composant_bouton">
            <input class="bouton" type="submit" value="soumettre">
        </div> 
    </form>
    <div class="question"><hr class="costum_hr">
        <p>vous n'avez pas de compte? <a href="{{ url('connexion') }}">se connecter</a></p> 
     </div>
</body>
</html>
