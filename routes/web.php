<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [EventController :: class, 'index'])
    ->name('events.index');


Route::get('/', [EventController :: class, 'index']) 
    -> name('events.index');

Route::get('/events/{id}', [EventController :: class, 'show'])
    -> name('events.show');


    
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // rotte events protette da auth
   
    Route::get('/events/create', [EventController :: class, 'create']) 
        ->name('events.create');

    Route :: post('/events/create', [EventController :: class, 'store'])
        ->name('events.store');

    Route :: get('/events/{id}/edit', [EventController :: class, 'edit'])
        -> name('events.edit');
        
    Route :: put('/events/{id}', [EventController :: class, 'update'])
        -> name('events.update');
        
    Route::delete('/users/{id}', [EventController :: class, 'destroy']) 
        ->name('events.destroy');


});

require __DIR__.'/auth.php';
