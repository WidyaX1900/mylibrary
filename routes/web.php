<?php

use App\Http\Controllers\Auth\VisitorRegisteredController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookRentController;
use App\Http\Controllers\FeedbackController;
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
Route::middleware(['auth', 'verified'])->group(function() {
    // Home Route
    Route::get('/home', [HomeController::class, 'index']);

    // Book Routes
    Route::get('/book', [BookController::class, 'index']);
    Route::get('/book/create', [BookController::class, 'create'])->middleware('admin-member');
    Route::post('/book/store', [BookController::class, 'store'])->middleware('admin-member');
    Route::get('/book/show/{book}', [BookController::class, 'show']);
    Route::get('/book/edit/{book}', [BookController::class, 'edit'])
    ->middleware('admin-only');
    Route::put('/book/update/{book}', [BookController::class, 'update'])->middleware('admin-only');
    Route::post('/book/delete', [BookController::class, 'delete'])->middleware('admin-only');
    Route::delete('/book/destroy', [BookController::class, 'destroy'])->middleware('admin-only');
    
    // Book Rental Routes
    Route::get('/rental', [BookRentController::class, 'index'])->middleware('admin-member');
    Route::get('/rental/create', [BookRentController::class, 'create'])->middleware('admin-member');
    Route::post('/rental/store', [BookRentController::class, 'store'])->middleware('admin-member');
    Route::get('/rental/edit/{rental}', [BookRentController::class, 'edit'])->middleware('admin-only');
    Route::put('/rental/update/{rental}', [BookRentController::class, 'update'])->middleware('admin-only');
    Route::post('/rental/delete', [BookRentController::class, 'delete'])->middleware('admin-only');
    Route::delete('/rental/destroy', [BookRentController::class, 'destroy'])->middleware('admin-only');

    // Feedback Routes
    Route::get('/feedback', [FeedbackController::class, 'index'])->middleware('admin-member');
    Route::get('/feedback/create', [FeedbackController::class, 'create'])->middleware('visitor-only');
    Route::post('/feedback/store', [FeedbackController::class, 'store'])->middleware('visitor-only');
    Route::get('/feedback/show/{feedback}', [FeedbackController::class, 'show'])->middleware('admin-member');
    Route::get('/feedback/personal', [FeedbackController::class, 'personalFeedback'])->middleware('visitor-only');
    Route::get('/feedback/delete/{feedback}', [FeedbackController::class, 'delete'])->middleware('admin-only');
    Route::delete('/feedback/destroy/{feedback}', [FeedbackController::class, 'destroy'])->middleware('admin-only');
});

// Guest Route
Route::middleware('guest')->group(function(){

    Route::get('/role', function() {
        return view('user.role');
    
    });

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/visitor/create', [VisitorRegisteredController::class, 'create']);
    Route::post('/visitor/store', [VisitorRegisteredController::class, 'store']);

});

