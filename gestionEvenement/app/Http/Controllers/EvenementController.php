<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer les événements
        $evenements = Evenement::all();
        return view('evenements.index', compact('evenements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('evenements.create_evenement');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'date' => 'required|date',
            'lieu' => 'required|string|max:255',
            'description' => 'required|string',
            'nombre_place' => 'required|integer',
            'date_limite_inscription' => 'required|date',
            'association_id' => 'required|integer|exists:associations,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Initialisation de la variable image
        $image = null;

        // Vérification si un fichier image a été uploadé
        if ($request->hasFile('image')) {
            // Stockage de l'image
            $chemin_image = $request->file('image')->store('public/images');
            // Récupération du nom du fichier de l'image
            $image = basename($chemin_image);
        }

        // Création de l'événement avec les données validées et le chemin de l'image
        $data = $request->all();
        $data['image'] = $image;

        Evenement::create($data); // Enregistrement dans la base de données

        return redirect()->back()->with('success', 'Événement ajouté avec succès');
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
    public function edit(Evenement $evenement)
    {
        return view('evenements.edit', compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evenement $evenement)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'nombre_place' => 'required|integer',
            'date' => 'required|date',
            'date_limite_inscription' => 'required|date',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $chemin_image = $request->file('image')->store('public/images');
            $data['image'] = basename($chemin_image);
        }

        $evenement->update($data);

        return redirect()->route('evenements.index')->with('success', 'Événement modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();

        return redirect()->route('evenements.index')->with('success', 'Événement supprimé avec succès');
    } 
}
