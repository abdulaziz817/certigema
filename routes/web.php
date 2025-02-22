<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SertifikatController;



// Route resource sudah mencakup semua route CRUD
Route::resource('sertifikat', SertifikatController::class);
Route::get('/sertifikat/download/{id}', [SertifikatController::class, 'download'])->name('sertifikat.download');

