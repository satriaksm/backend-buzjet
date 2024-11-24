<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\TransportationController;

Route::get('/', function () {
    return view('pages.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('destinations', DestinationController::class);
    Route::resource('hotels', HotelController::class);
    Route::resource('transportations', TransportationController::class);
    Route::resource('packages', PackageController::class);

    Route::middleware('auth:sanctum')->get('/destinations/{id}/hotels', [DestinationController::class, 'getHotels']);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/images/{folder}/{filename}', function ($folder, $filename) {
    $path = resource_path('images/' . $folder . '/' . $filename);

    if (!file_exists($path)) {
        abort(404); // Mengembalikan 404 jika gambar tidak ditemukan
    }

    return Response::file($path); // Mengembalikan file gambar
});

require __DIR__.'/auth.php';
