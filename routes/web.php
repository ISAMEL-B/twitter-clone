<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\twitterController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\termsController;
use App\Http\Controllers\twitController;
use Illuminate\Support\Facades\Route;

// Old school of routing
//Route::get('/', function () {
 //   return view('hello');
//});

Route::get('/', [DashboardController::class , 'index'] );

//routes with a gett request given some with unique name at the end for easy calling
Route::get('/twitter', [twitterController::class , 'media'] )->name('twit.page');

Route::get('/register', [registerController::class , 'register'] );
Route::get('/login', [loginController::class , 'login'] );
Route::get('/profile', [profileController::class , 'profile'] );
Route::get('/terms', [termsController::class , 'terms'] );

// form submition route with a post request given its unique name at the end
Route::post('/twitter', [twitController::class , 'store'] )->name('twit.sumitting');

// Delete route targeting a specific id using DESTROY NAMING convenstion FUNCTION
Route::delete('/twitter/{id}', [twitController::class , 'destroy'] )->name('twit.destroy');

//Show one full twit route targeting a specific id
Route::get('/twitter/{id}', [twitController::class , 'show'] )->name('twit.show');

//Edit one full twit route targeting a specific id
Route::get('/twitter/{id}/edit', [twitController::class , 'edit'] )->name('twit.edit');
