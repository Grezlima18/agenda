<?php

use App\Http\Controllers\Agenda;
use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::fallback(function () {
    // Redireciona para o index da rota 'agenda'
    return redirect()->route('agenda.index');
});

Route::resource('agenda', AgendaController::class);

// Route::get('/', function () {
//     return view('teste');
// });
