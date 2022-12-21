<?php

use App\Http\Controllers\ListingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listings;

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

// All listings
Route::get('/', [ListingsController::class, 'index']);


// Create Listing (Post a job route) create Listing form
Route::get('/listings/create', [ListingsController::class, 'create'])->middleware('auth');

// Store/Save new job listing
Route::post('/listings', [ListingsController::class, 'store'])->middleware('auth');


// Edit Listing (Form)
Route::get('/listings/{listing}/edit', [ListingsController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingsController::class, 'update'])->middleware('auth');


// Delete Listing
Route::delete('/listings/{listing}', [ListingsController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingsController::class, 'manage'])->middleware('auth');


// To single listing
Route::get('/listings/{listing}', [ListingsController::class, 'show']);


// Show Registration Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);