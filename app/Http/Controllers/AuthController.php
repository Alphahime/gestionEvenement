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
            return redirect('evenements'); // Redirigez vers le tableau de bord de l'association
        } else {
            return redirect('connexion')->withErrors('Vous n\'êtes pas autorisé à vous connecter');
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

    // deconnexion

    

    public function deconnexion()
{
    Auth::guard('association')->logout(); // Déconnexion de l'authentification de l'association
    return redirect('connexion')->with('success', 'Vous avez été déconnecté avec succès.');
}



}
