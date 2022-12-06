<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookRentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Authentication Routes
Route::middleware(['auth', 'verified'])->group(function(){
    // Book Routes
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/book', [BookController::class, 'index']);
    Route::get('/book/create', [BookController::class, 'create']);
    Route::post('/book/store', [BookController::class, 'store']);
    Route::get('/book/show/{book}', [BookController::class, 'show']);
    Route::get('/book/edit/{book}', [BookController::class, 'edit']);
    Route::put('/book/update/{book}', [BookController::class, 'update']);
    Route::post('/book/delete', [BookController::class, 'delete']);
    Route::delete('/book/destroy', [BookController::class, 'destroy']);
    
    // Book Rental Routes
    Route::get('/rental', [BookRentController::class, 'index']);
    Route::get('/rental/create', [BookRentController::class, 'create']);
    Route::post('/rental/store', [BookRentController::class, 'store']);
    Route::get('/rental/edit/{rental}', [BookRentController::class, 'edit']);
    Route::put('/rental/update/{rental}', [BookRentController::class, 'update']);
    Route::post('/rental/delete', [BookRentController::class, 'delete']);
    Route::delete('/rental/destroy', [BookRentController::class, 'destroy']);
});

