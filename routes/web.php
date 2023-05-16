<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EquipmentController;

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

Route::get('/', [HomeController::class, 'index']);


Route::get('/dashboard', function () {
    return view('layouts/dashboard');
})->middleware(['auth', 'verified'])->name('');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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


require __DIR__.'/auth.php';
