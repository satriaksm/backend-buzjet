<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

Route::get('/hotels/{destinationId}', [HotelController::class, 'getByDestination']);

