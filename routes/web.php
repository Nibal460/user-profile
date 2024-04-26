<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\User;
use App\Models\Profile;
use App\Models\Location;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
//Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');


//Route::get('/profile', function () {
  //  return view('profile.profile');
//});








