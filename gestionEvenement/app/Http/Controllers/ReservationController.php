<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations= Reservation::with('evenement')->get();
        return view('reservations.affiche_reservation', compact('reservations'));
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
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'fonction' => 'required|string|max:255',
            'users_id' => 'required|integer',
            'evenement_id' => 'required|integer',
        ]);

        Reservation::create($request->all());

        return redirect()->back()->with('success', 'Réservation effectuée avec succès');
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
    public function confirmed()
    {
        // Récupérer toutes les réservations confirmées
        $reservations = Reservation::where('status', 'confirmed')->get();

        // Retourner la vue avec les réservations confirmées
        return view('reservations.confirmed', compact('reservations'));
    }
}
