<?php

use App\Http\Controllers\Auth\RegisteredUserController;
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


Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/login-coach', function () {
    return view('auth.login_coach');
});

Route::get('/login-player', function () {
    return view('auth.login_player');
});


Route::get('equipos', [EquiposController::class, 'show'])->name('equipos.show');

Route::get('/', [NoticiasController::class, 'show'])->name('noticias.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/tacticas', [TacticasController::class, 'store'])->name('tacticas.store');
    Route::get('/tacticas', [TacticasController::class, 'show'])->name('tacticas.show');
    Route::get('/tacticas/index', [TacticasController::class, 'index'])->name('tacticas.index');

    Route::get('/tacticas/create', [TacticasController::class, 'create'])->name('tacticas.create');
    Route::post('/equipos',[EquiposController::class, 'store'])->name('equipos.store');
    Route::get('/equipos/create',[EquiposController::class, 'create'])->name('equipos.create');
    Route::post('/', [NoticiasController::class, 'store'])->name('noticias.store');
    Route::get('/noticias/create',[NoticiasController::class, 'create'])->name('noticia.create');

    Route::get('/tacticas/{tactica}/edit', [TacticasController::class, 'edit'])->name('tacticas.edit');
    Route::put('/tacticas/{tactica}', [TacticasController::class, 'update'])->name('tacticas.update');

    Route::delete('/tacticas/{tactica}',[TacticasController::class, 'destroy'])->name('tacticas.destroy');

    Route::get('/noticias/{noticia}/edit', [NoticiasController::class, 'edit'])->name('noticia.edit');
    Route::put('/noticias/{noticia}', [NoticiasController::class, 'update'])->name('noticia.update');
    Route::delete('/noticias/{noticia}',[NoticiasController::class, 'destroy'])->name('noticia.destroy');

    Route::get('/equipos/{equipo}/edit', [EquiposController::class, 'edit'])->name('equipos.edit');
    Route::put('/equipos/{equipo}', [EquiposController::class, 'update'])->name('equipos.update');
    Route::delete('/equipos/{equipo}',[EquiposController ::class, 'destroy'])->name('equipos.destroy');
});

Route::middleware(['role:Jugador'])->group(function () {
    Route::get('/tacticas/index', [TacticasController::class, 'index'])->name('tacticas.index');
});

require __DIR__.'/auth.php';
