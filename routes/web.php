<!-- <?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;
use App\Models\Evenement;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); 
// authentification user
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

Route::resource('users', UserController::class);


Route::resource('authuser', AuthController::class);


Route::resource('association', AssociationController::class);


Route::resource('admin', AdminController::class);


Route::resource('reservations', ReservationController::class);


Route::resource('evenements', EvenementController::class);


Route::get('/landing', [EvenementController::class, 'landingPage'])->name('landing');
// routes pour authentification association
Route::get('connexion',[AuthController::class,'create']);
Route::post('verification_connexion',[AuthController::class,'store']);
// deconnexion des associations
Route::post('deconnexion', [AuthController::class, 'deconnexion'])->name('association.logout');


// Route vers page index.blade.php  
// Route::resource('evenements', EvenementController::class);
// Route::get('evenements.index', [EvenementController::class, 'index'])->name('evenements.index');

// Route::resource('evenements.store', EvenementController::class);

Route::resource('role', RoleController::class);
Route::resource('dashboard-association', AssociationController::class);

// route pour afficher les evenements dans le dashbord de l'admin
Route::get('evenements_admin',[EvenementController::class,'afficher']);
Route::get('supprimer_evenement/{id}',[EvenementController::class,'suppression']);


Route::get('/evenements/{evenement}/details', [EvenementController::class, 'showDetails'])->name('evenements.details');


// Route::resource('reservations', ReservationController::class);
Route::get('/reservations/confirmed', [ReservationController::class, 'confirmed'])->name('reservations.confirmed');

// route pour la desactivation du compte de l'association
Route::post('desactivation/{id}', [EvenementController::class, 'deactivation'])->name('desactivation');
Route::post('activation/{id}', [EvenementController::class, 'activation'])->name('activation');



// Route::resource('evenements', EvenementController::class)->only(['edit', 'update', 'destroy']);
// Route::resource('evenements', EvenementController::class);
// Route::resource('evenements', EvenementController::class)->only(['edit', 'update', 'destroy','index']);

/* afficher reservations */

// Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');

// liste reservation pour un utitlisateur
Route::get('mes_reservations',[ReservationController::class, 'reservation']);
// route pour afficher le profil du user
Route::get('profil_user',[UserController::class, 'profil']);

// Route::resource('evenements', EvenementController::class);
// Route::get('/evenements', [ReservationController::class, 'index'])->name('reservations.index');