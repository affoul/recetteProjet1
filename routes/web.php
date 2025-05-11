<?php

use App\Http\Controllers\AproposController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecetteController;
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


Route::get('/accueil', function () {
    return view('client.acceuil');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'admin'])->name('admin.dashboard');
Route::get('/client/dashboard', function () {
    return view('client.dashboard');
})->middleware(['auth', 'client'])->name('client.dashboard');
Route::get('/chef/dashboard', function () {
    return view('chef.dashboard');
})->middleware(['auth', 'chef'])->name('chef.dashboard');

require __DIR__.'/auth.php';




Route::resource('recettes', RecetteController::class);


Route::get('/register', [RegisteredUserController::class, 'create'])
            ->middleware('guest')
            ->name('register');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
            ->middleware('guest')
            ->name('login');

Route::get('/recettes/{recette}', [RecetteController::class, 'show'])->name('recettes.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/a-propos', [AproposController::class, 'about'])->name('a-propos');