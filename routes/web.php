<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SertifikatController;

// Route resource sudah mencakup semua route CRUD
Route::resource('sertifikat', SertifikatController::class);
