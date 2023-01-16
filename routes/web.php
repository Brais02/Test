<?php

use App\Http\Controllers\CodesController;
use App\Http\Controllers\OffersController;
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

Route::resource('codes', CodesController::class)->only('index', 'store', 'show', 'update', 'destroy');

Route::get('/codes/create/{offer}', [CodesController::class, 'create']);

Route::get('/codes/edit/{code}', [CodesController::class, 'edit']);

Route::resource('offers', OffersController::class);

require __DIR__.'/auth.php';
