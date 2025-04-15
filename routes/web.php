<?php

#use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;

// Define a route that uses the method
Route::get('/protected-route', [YourController::class, 'yourMethod'])->middleware('cognito.auth');

