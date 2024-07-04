<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Association;
use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $countReservations = Reservation::count();
        $countEvenements = Evenement::count();
        $evenements = Evenement::all();
        return view('evenements.index', compact('evenements', 'countReservations','countEvenements'));
        

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
        $association = Auth::guard('association')->user();
    
        if (!$association->active) {
            return redirect()->back()->withErrors(['Votre association est désactivée et ne peut pas créer d\'événements.']);
        }
    
        return view('evenements.create_evenement', compact('association'));
    }

    
    

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'date' => 'required|date',
            'lieu' => 'required|string|max:255',
            'description' => 'required|string',
            'nombre_place' => 'required|integer',
            'date_limite_inscription' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Traitement de l'image
        $image = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $image = basename($imagePath);
        }
    
        // Création de l'événement dans la base de données
        Evenement::create([
            'nom' => $request->nom,
            'date' => $request->date,
            'lieu' => $request->lieu,
            'description' => $request->description,
            'nombre_place' => $request->nombre_place,
            'date_limite_inscription' => $request->date_limite_inscription,
            'association_id' => $request->association_id,
            'image' => $image,
        ]);
    
        // Redirection vers la liste des réservations
        return redirect()->route('reservations.index')->with('success', 'Événement ajouté avec succès');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $evenement = Evenement::findOrFail($id); 
        return view('portails.show', ['evenement' => $evenement]);
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
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'nombre_place' => 'required|integer',
            'date' => 'required|date',
            'date_limite_inscription' => 'required|date',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Traitement de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $evenement->image = basename($imagePath);
        }

        // Mise à jour de l'événement
        $evenement->nom = $request->nom;
        $evenement->lieu = $request->lieu;
        $evenement->nombre_place = $request->nombre_place;
        $evenement->date = $request->date;
        $evenement->date_limite_inscription = $request->date_limite_inscription;
        $evenement->description = $request->description;
        $evenement->save();

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

   

    /**
     * Affiche la landing page.
     */
    public function landingPage()
    {
        $evenements = Evenement::all(); // Récupère tous les événements
        return view('portails.landing', compact('evenements')); // Transmet les événements à la vue
    }
    
}
