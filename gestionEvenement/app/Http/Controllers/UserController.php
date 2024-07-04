<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        return view('users.inscription');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        // Hacher le mot de passe et ajouter aux données validées
        // $request->merge(['mdp' => Hash::make($request->mdp)]);

        // Créer un nouvel utilisateur avec les données validées et le mot de passe haché
        User::create($request->all());

        // Rediriger l'utilisateur après la création
        return redirect()->back()->with('success', 'Utilisateur créé avec succès');
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
        $user=User::find($id);
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::find($id);
        $user->update($request->all());
        return redirect('profil_user')->with('success', 'Votre modification a été effectuée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function profil()
    {
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }
}
