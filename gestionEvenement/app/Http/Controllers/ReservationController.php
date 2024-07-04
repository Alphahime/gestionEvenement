<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with(['user', 'evenement'])->get();
        return view('reservations.liste_reservation', compact('reservations'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Vérifiez si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour réserver.');
        }
    
        // Validation des données $request
        $request->validate([
            'evenements_id' => 'required|exists:evenements,id',
        ]);
    
        $reservation = new Reservation();
        $reservation->user_id = Auth::id(); // Utilise l'ID de l'utilisateur authentifié
        $reservation->evenements_id = $request->evenements_id;
        $reservation->status = 'en attente'; // Statut initial de la réservation
    
        $reservation->save();
    
        // Redirection vers la liste des réservations après création
        return redirect()->route('landingpage')->with('success', 'Votre réservation a été effectuée avec succès.');
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
    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->status = $request->input('status');
        $reservation->save();

        return redirect()->back()->with('success', 'Statut de la réservation mis à jour avec succès.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function confirmed()
    {
        // Récupérer toutes les réservations confirmées
        $reservations = Reservation::where('status', 'confirmed')->get();

        // Retourner la vue avec les réservations confirmées
        return view('reservations.confirmed', compact('reservations'));
    }

  

    
    }

