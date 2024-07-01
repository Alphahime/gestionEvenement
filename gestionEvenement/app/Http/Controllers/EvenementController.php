<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evenements= Evenement::all();
        
        return view('landingpage', compact('evenements'));
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
       $evenements= Evenement::find($id); 
        
        return view('show', compact('evenements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   
}
