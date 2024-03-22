<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MechanicController;
use Illuminate\Support\Facades\Route;

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
/* Service  */
Route::get('/',[ServiceController::class,'index']);
Route::get('/create',[ServiceController::class,'create']);
Route::post('/store/service', [ServiceController::class, 'store'])->name('service.store');
Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

/* Mechanic */
    
Route::get('/add-mechanic',[MechanicController::class,'create']);
Route::post('/store/mechanic', [MechanicController::class, 'storeMechanic'])->name('mechanic.store');
Route::get('/mechanics', [MechanicController::class, 'mechanics'])->name('mechanics');
Route::get('/mechanics/{id}', [MechanicController::class, 'showMechanic'])->name('mechanics.show');
Route::delete('/mechanics/{id}', [MechanicController::class, 'destroy'])->name('mechanic.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout','\App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');
});

require __DIR__.'/auth.php';
