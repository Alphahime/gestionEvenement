<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $evenements= Evenement::all();
        return view('landingpage', compact('liste_evenements'));


    }

    public function deactivation($id){
        $association=Association::find($id);
        $association->active=false;
        $association->save();

        return redirect()->back()->with('success', 'Le compte de l\'association a été désactivé avec succès.');
    }

    public function activation($id){
        $association=Association::find($id);
        $association->active=true;
        $association->save();

        return redirect()->back()->with('success', 'Le compte de l\'association a été active  avec succès.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {
        $association = Auth::guard('association')->user(); // Récupérer l'utilisateur authentifié avec la garde 'association'

if (!$association->active) { 
    return redirect()->back()->withErrors(['Votre association est désactivée et ne peut pas créer d\'événements.']);
} else {
    // Récupérer l'ID de l'association
    $associationId = $association->id;

    // Vous pouvez maintenant utiliser $associationId pour l'utiliser dans la création d'événement ou pour toute autre opération
    return view('evenements.create_evenement', compact('associationId'));
}

        
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
            // 'association_id' => 'required|integer|exists:associations,id',
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


// gestion des evenements du dashbord
    public function afficher(){
        // affichages des evenements dans le dashbord de l'admin
        $evenements= Evenement::all();
        return view('admins.liste_evenements', compact('evenements'));

    }

    // gestion de la suppression
    public function suppression($id){
        $evenement=Evenement::find($id);
        $evenement->delete();
        return redirect()->back();


    }

   

}
