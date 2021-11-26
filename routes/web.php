<?php

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

use App\Http\controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth'); //direcionar para página create
Route::get('/events/{id}', [EventController::class, 'show']); //rota para mostrar evento
Route::post('/events', [EventController::class, 'store']); //criar dados no banco
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');;
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');; 
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');; 

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'JoinEvent']); //criar dados no banco
Route::delete('/events/leave/{id}', [EventController::class, 'LeaveEvent']); //criar dados no banco