<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\ReservationControlle;
use App\Http\Controllers\AdministratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('layouts/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Administrators

    Route::get('/admin', [AdministratorController::class, 'index'])->name('administrator.index');
    Route::get('/admin/create', [AdministratorController::class, 'create'])->name('administrator.create');
    Route::post('/admin/create', [AdministratorController::class, 'store'])->name('administrator.store');
    
    // Equipement Route
    Route::get('/equipment', [EquipmentController::class, 'index'])->name('equipment.index');
    Route::get('/equipment/create', [EquipmentController::class, 'create'])->name('equipment.create');
    Route::post('/equipment/create', [EquipmentController::class, 'store'])->name('equipment.store');
    Route::get('/equipment/{id}', [EquipmentController::class, 'show'])->name('equipment.show');
    Route::get('/equipment/{id}/edit', [EquipmentController::class, 'edit'])->name('equipment.edit');
    Route::post('/equipment/{id}/edit', [EquipmentController::class, 'update'])->name('equipment.update');
    Route::delete('/equipment/{id}', [EquipmentController::class, 'destroy'])->name('equipment.destroy');
    
    // Room Route
    Route::get('/salles', [RoomController::class, 'index'])->name('salles');
    Route::get('/salles/create', [RoomController::class, 'create'])->name('createSalle');
    Route::post('/salles/create', [RoomController::class, 'store'])->name('store.store');
    Route::get('/salles/{id}', [RoomController::class, 'show'])->name('salles.show');
    Route::get('/salles/{id}/edit', [RoomController::class, 'edit'])->name('salle.edit');
    Route::post('/salles/{id}/edit', [RoomController::class, 'update'])->name('salle.update');
    Route::delete('/salles/{id}', [RoomController::class, 'destroy'])->name('salle.destroy');
    
    
    // Reservation Route
    
    Route::post('/', [ReservationControlle::class, 'store'])->name('reservation.store');
    Route::get('/reservation', [ReservationControlle::class, 'index'])->name('reservation.index');
    Route::get('/reservation/create', [ReservationControlle::class, 'create'])->name('reservation.create');
    Route::post('/reservation/create', [ReservationControlle::class, 'adminstore'])->name('reservation.adminstore');
    Route::get('/reservation/{id}', [ReservationControlle::class, 'show'])->name('reservation.show');
    Route::post('/reservation/{id}/reservate', [ReservationControlle::class, 'update'])->name('reservation.update');
    // Route::get('/reservation/search', [ReservationControlle::class, 'search'])->name('reservation.search');

    // Salle Equipment Route
    
    Route::get('/contenu', [ContenuController::class, 'index'])->name('contenu.index');
    Route::post('/contenu', [ContenuController::class, 'centent'])->name('contenu.content');
    Route::get('/contenu/create', [ContenuController::class, 'create'])->name('contenu.create');
    Route::post('/contenu/create', [ContenuController::class, 'store'])->name('contenu.store');
    Route::delete('/contenu/{id}', [ContenuController::class,'destroy'])->name('contenu.delete');
    
    // services Route
    
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services/create', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('/services/{id}/edit', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

});






Route::get('/calender', function(){
    return view('layouts.calender');
});



require __DIR__.'/auth.php';
