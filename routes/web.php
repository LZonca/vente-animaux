<?php

use App\Models\Animal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimauxController;
use function Laravel\Prompts\error;

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
    return view('welcome');
});

Route::get('/counter-container', function(){
    return view('counter-container');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/animaux', [AnimauxController::class, 'index'])->name('index');

    Route::get('/animaux/create', [AnimauxController::class, 'create'])->name('create');

    Route::post('/animaux', [AnimauxController::class, 'store'])->name('store');

    Route::delete('/animaux/{animal}', [AnimauxController::class, 'destroy'])->name('delete');

    Route::get('/animaux/{animal}', [AnimauxController::class, 'show'])->name('show');

    Route::get('/animaux/{animal}/edit', [AnimauxController::class, 'edit'])->name('editer');

    Route::patch('/animaux/{animal}', [AnimauxController::class, 'update'])->name('update');
});
