{{-- <link rel="stylesheet" href="{{ asset('css/inscription.css') }}"> --}}

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Prenom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- nom --}}

        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>

        {{-- telephone --}}

        <div>
            <x-input-label for="telephone" :value="__('Telephone')" />
            <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="telephone" />
            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
        </div>

        {{-- adresse --}}

        <div>
            <x-input-label for="adresse" :value="__('Adresse')" />
            <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" />
            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


{{-- <!DOCTYPE html>
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
    
    <form method="POST" action="{{ route('register') }}">
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
        <div class="nom_compet">
            <div class="form">
                <div class="vertical">
                    <label for="prenom">Prenom</label>
                    <input type="text" placeholder="prenom" name="prenom">
                </div>
                @error('prenom')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>
        
            <div class="form">
                <div class="vertical">
                    <label for="nom">Nom</label>
                    <input type="text" placeholder="nom" name="nom">
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
                    <input type="text" placeholder="telephone" name="telephone">
                </div>
                @error('telephone')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>

            <div class="form">
                <div class="vertical">
                    <label for="email">email</label>
                    <input type="email" placeholder="ndeye@gmail.com" name="email">
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
                    <input type="text" placeholder="adress" name="adresse">
                </div>
                @error('adresse')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>

            <div class="form">
                <div class="vertical">
                    <label for="prenom">mot de pass</label>
                    <input type="password" placeholder="mot de pass" name="password">
                </div>
                @error('mdp')
                <div class="alert alert-succes">{{ $message }}</div>    
                @enderror
            </div>
        </div>

        <div class="composant_bouton">
            <input class="bouton" type="submit" value="soumettre">
        </div> 
    </form>
    <div class="question"><hr class="costum_hr">
        <p>vous n'avez pas de compte? <a href="">s'inscrire</a></p> 
     </div>
</body>
</html>
 --}}
