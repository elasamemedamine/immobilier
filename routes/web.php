<?php
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// routes/web.php

Route::resource('properties', PropertyController::class);
// Route::resource('dashboard', AdminController::class);
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index')->middleware('auth');
Route::get('/dashboard/create', [AdminController::class, 'create'])->name('dashboard.create')->middleware('auth');
Route::post('/dashboard', [AdminController::class, 'store'])->name('dashboard.store')->middleware('auth');
Route::get('/dashboard/{property}', [AdminController::class, 'show'])->name('dashboard.show')->middleware('auth');
Route::get('/dashboard/{property}/edit', [AdminController::class, 'edit'])->name('dashboard.edit')->middleware('auth');
Route::put('/dashboard/{property}', [AdminController::class, 'update'])->name('dashboard.update')->middleware('auth');
Route::delete('/dashboard/{property}', [AdminController::class, 'destroy'])->name('dashboard.destroy')->middleware('auth');



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('ourservice');
});


Route::get('/ourservice', function () {
    return view('ourservice');
})->name('ourservice');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
