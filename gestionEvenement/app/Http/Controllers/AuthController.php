<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.auth');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAuthRequest $request)

    {
      
        if(auth()->attempt($request->only('email','password'))) {
            // Authentification réussie, rediriger vers une autre route
            return redirect()->route('association.create')->with('success', 'Connexion réussie.');
        } else {
            // Échec de l'authentification, rediriger vers la route de connexion avec une erreur
            return redirect()->route('users.create')->withErrors(['password' => 'Adresse e-mail ou mot de passe incorrect.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 
    }
}
