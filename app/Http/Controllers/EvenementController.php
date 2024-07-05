<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
    /**
     * Affiche une liste des événements paginés.
     */
    public function index()
    { 
        $countReservations = Reservation::count();
        $countEvenements = Evenement::count();
        $evenements = Evenement::paginate(2);
        
        return view('evenements.index', compact('evenements', 'countReservations', 'countEvenements'));
    }

    /**
     * Affiche le formulaire de création d'un nouvel événement.
     */
    public function create()
    {
        $association = Auth::guard('association')->user();
    
        if (!$association->active) {
            return redirect()->back()->withErrors(['Votre association est désactivée et ne peut pas créer d\'événements.']);
        }
    
        return view('evenements.create', compact('association'));
    }

    /**
     * Enregistre un nouvel événement dans la base de données.
     */
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

    // Récupérer l'ID de l'association authentifiée
    $associationId = Auth::guard('association')->id();

    // Vérifier que l'association existe et est active
    if (!$associationId) {
        return redirect()->back()->withErrors(['Association non trouvée ou inactive.']);
    }

    // Création de l'événement dans la base de données
    Evenement::create([
        'nom' => $request->nom,
        'date' => $request->date,
        'lieu' => $request->lieu,
        'description' => $request->description,
        'nombre_place' => $request->nombre_place,
        'date_limite_inscription' => $request->date_limite_inscription,
        'association_id' => $associationId,
        'image' => $image,
    ]);

    // Redirection vers la liste des événements avec un message de succès
    return redirect()->route('evenements.index')->with('success', 'Événement ajouté avec succès');
}


    /**
     * Affiche les détails d'un événement spécifique.
     */
    public function show($id)
    {
        $evenement = Evenement::findOrFail($id); 
        return view('portails.show', ['evenement' => $evenement]);
    }

    /**
     * Affiche le formulaire d'édition d'un événement.
     */
    public function edit(Evenement $evenement)
    {
        return view('evenements.edit', compact('evenement'));
    }

    /**
     * Met à jour un événement dans la base de données.
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
     * Supprime un événement de la base de données.
     */
    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return redirect()->route('evenements.index')->with('success', 'Événement supprimé avec succès');
    } 

    /**
     * Désactive un événement dans la base de données.
     */
    public function deactivation($id)
    {
        $evenement = Evenement::find($id);
        if (!$evenement) {
            return redirect()->back()->withErrors(['Événement non trouvé.']);
        }
        $evenement->active = false;
        $evenement->save();

        return redirect()->back()->with('success', 'Événement désactivé avec succès.');
    }

    /**
     * Active un événement dans la base de données.
     */
    public function activation($id)
    {
        $evenement = Evenement::find($id);
        if (!$evenement) {
            return redirect()->back()->withErrors(['Événement non trouvé.']);
        }
        $evenement->active = true;
        $evenement->save();

        return redirect()->back()->with('success', 'Événement activé avec succès.');
    }

    /**
     * Affiche la landing page avec tous les événements.
     */
    public function landingPage()
    {
        $evenements = Evenement::all(); // Récupère tous les événements
        return view('portails.landing', compact('evenements')); // Transmet les événements à la vue
    }
}
