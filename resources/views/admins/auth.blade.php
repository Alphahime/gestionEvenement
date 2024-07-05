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
    <h1> Formulaire de Connexion</h1>
    <h3 style="text-align: center">se connecter avec :</h3>
    
    <form action="{{ url('verification_connexion') }}" method="post">
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
          <div class="connexion"> <div class="vertical">
            <label for="email">Email</label>
            <input type="text" placeholder="adress" name="email">
        </div>
        @error('email')
        <div class="alert alert-succes">{{ $message }}</div>    
        @enderror

        <div class="vertical">
             <label for="prenom">Mot de pass</label>
            <input type="password" placeholder="mot de pass" name="password"></div>
       
        @error('password')
        <div class="alert alert-succes">{{ $message }}</div>    
        @enderror
  </div >
      <div class="composant_bouton">    
        <input class="boutton" type="submit" value="soumettre">
      </div>         

</form>

    
    
</body>
</html>