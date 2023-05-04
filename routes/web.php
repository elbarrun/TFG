<?php

use App\Http\Controllers\EquiposController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TacticasController;
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

Route::get('/', function () {
    return view('layout.public');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/login-coach', function () {
    return view('auth.login_coach');
});


Route::get('equipos', [EquiposController::class, 'show'])->name('equipos.show');

Route::get('/', [NoticiasController::class, 'show'])->name('noticias.show_noticia');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/tacticas', [TacticasController::class, 'store'])->name('tacticas.store');
    Route::get('/tacticas', [TacticasController::class, 'show'])->name('tacticas.show');
    Route::get('/tacticas/create', [TacticasController::class, 'create'])->name('tacticas.create');
    Route::post('/equipos',[EquiposController::class, 'store'])->name('equipos.store');
    Route::get('/equipos/create',[EquiposController::class, 'create'])->name('equipos.create');
    Route::post('/', [NoticiasController::class, 'store'])->name('noticias.store');
    Route::get('/noticias/create',[NoticiasController::class, 'create'])->middleware(['auth']);
});
require __DIR__.'/auth.php';
