<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Mail\notification;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
            'evenement_id' => 'required|exists:evenements,id',
        ]);
    
        $reservation = new Reservation();
        $reservation->user_id = Auth::id(); // Utilise l'ID de l'utilisateur authentifié
        $reservation->evenement_id = $request->evenement_id;
        $reservation->status = 'en attente'; // Statut initial de la réservation
    
        $reservation->save();
    
        // Redirection vers la liste des réservations après création
        return redirect('mes_reservations')->with('success', 'Votre réservation a été effectuée avec succès.');
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

        // Valider la requête si nécessaire, mais dans ce cas, nous n'en avons pas besoin car le statut est défini par le bouton
    
        // Récupérer le statut à partir du bouton
        $status = $request->input('status');
    
        // Mettre à jour le statut avec la valeur du bouton
        $reservation->status = $status;
        $reservation->save();
    
        // Envoyer l'email si le statut est "refuse"
        if ($status === 'refuse') {
            Mail::to($reservation->user->email)->send(new notification($reservation));
        }

        return redirect()->back()->with('success', 'Statut de la réservation mis à jour avec succès.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation=reservation::find($id);
        $reservation->delete();
        return redirect('reservations');
    }
    public function confirmed()
    {
        // Récupérer toutes les réservations confirmées
        $reservations = Reservation::where('status', 'confirmed')->get();

        // Retourner la vue avec les réservations confirmées
        return view('reservations.confirmed', compact('reservations'));
    }

    public function reservation(){
        $user = Auth::user();
        $reservations = $user->reservations()->with('evenement')->paginate(10);   
             return view('reservations.affiche_reservation',compact('reservations'));
    }

  

    
    }

