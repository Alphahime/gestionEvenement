<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuthRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        return view('associations.auth');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('association')->attempt($credentials)) {
            return redirect('association'); // Redirigez vers le tableau de bord de l'association
        } else {
            return redirect()->route('connexion')->withErrors('Vous n\'êtes pas autorisé à vous connecter');
        }
    }

//     public function store(CreateAuthRequest $request)
// {
//     if (Auth::attempt($request->only('email', 'password'))) {
//         if (Auth::user()->hasRole('admin')) {
//             return redirect()->route('admin.index')->with('success', 'Connexion réussie.');
//         } elseif (Auth::user()->hasRole('association')) {
//             return redirect()->route('association.index')->with('success', 'Connexion réussie.');
//         } else {
//             return redirect()->route('association.create')->with('success', 'Connexion réussie.');
//         }
//     } else {
//         // Échec de l'authentification, rediriger vers le formulaire de connexion avec une erreur
//         return redirect()->route('authuser.create')->withErrors(['password' => 'Adresse e-mail ou mot de passe incorrect.']);
//     }
// }
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
