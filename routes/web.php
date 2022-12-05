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

Route::get('/home', [HomeController::class, 'index']);

// Book Routes
Route::get('/book', [BookController::class, 'index'])->middleware('auth');
Route::get('/book/create', [BookController::class, 'create'])->middleware('auth');
Route::post('/book/store', [BookController::class, 'store'])->middleware('auth');
Route::get('/book/show/{book}', [BookController::class, 'show'])->middleware('auth');
Route::get('/book/edit/{book}', [BookController::class, 'edit'])->middleware('auth');
Route::put('/book/update/{book}', [BookController::class, 'update'])->middleware('auth');
Route::post('/book/delete', [BookController::class, 'delete'])->middleware('auth');
Route::delete('/book/destroy', [BookController::class, 'destroy'])->middleware('auth');

// Book Rental Routes
Route::get('/rental', [BookRentController::class, 'index'])->middleware('auth');
Route::get('/rental/create', [BookRentController::class, 'create'])->middleware('auth');
Route::post('/rental/store', [BookRentController::class, 'store'])->middleware('auth');
Route::get('/rental/edit/{rental}', [BookRentController::class, 'edit'])->middleware('auth');
Route::put('/rental/update/{rental}', [BookRentController::class, 'update'])->middleware('auth');
Route::post('/rental/delete', [BookRentController::class, 'delete'])->middleware('auth');
Route::delete('/rental/destroy', [BookRentController::class, 'destroy'])->middleware('auth');