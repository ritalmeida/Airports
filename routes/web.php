<?php

use App\Http\Controllers\AirportController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
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
Route::get('/', [TestController::class, 'home']);
Route::get('/airport', [TestController::class, 'airport']);
Route::get('/flight', [TestController::class, 'flight']);

// Route::resource('airports', AirportController::class);

Route::get('/airport', [AirportController::class,'index'])->name('airports.index');
Route::get('/airport/create', [AirportController::class,'create'])->name('airports.create');
Route::post('/airport/store', [AirportController::class,'store'])->name('airports.store');
Route::get('/airport/show', [AirportController::class,'show'])->name('airports.show');
Route::get('/airport/edit', [AirportController::class,'edit'])->name('airports.edit');
Route::put('/airport/update', [AirportController::class,'update'])->name('airports.update');
Route::delete('/airport/destroy', [AirportController::class,'destroy'])->name('airports.destroy');

//Route::resource('flights', FlightController::class);
Route::get('/flight', [FlightController::class, 'index'])->name('flights.index');
Route::get('/flight/create', [FlightController::class, 'create'])->name('flights.create');
Route::get('/flight/edit', [FlightController::class, 'edit'])->name('flights.edit');
Route::get('/flight/show', [FlightController::class, 'show'])->name('flights.show');
Route::get('/flight/destroy', [FlightController::class, 'destroy'])->name('flights.destroy');
Route::get('/flight/update', [FlightController::class, 'update'])->name('flights.update');
Route::get('/flight/store', [FlightController::class, 'store'])->name('flights.store');


require __DIR__.'/auth.php';
