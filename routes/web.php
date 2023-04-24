<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

// All listing
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])
    ->middleware('auth');

// Store Listing Data
Route::post('/listings/', [ListingController::class, 'store'])
    ->middleware('auth');

// Show Edit Listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])
    ->middleware('auth');

// Submit Edit Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])
    ->middleware('auth');

// Show Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Get Register User Form
Route::get('/register', [UserController::class, 'create']);

// Create User Form
Route::post('/register', [UserController::class, 'store'])
    ->middleware('guest');

// Logout
Route::post('/logout', [UserController::class, 'logout']);

// get the login form
Route::get('/login', [UserController::class, 'login'])
    ->name('login')->middleware('guest');


Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  