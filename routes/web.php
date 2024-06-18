<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TallerController;

Route::get('/', [PageController::class, 'index']);
Route::get('/programas', [PageController::class, 'programas']);
Route::get('/asesoramiento', [PageController::class, 'asesoramiento']);
Route::get('/contacto', [PageController::class, 'contacto']);

Route::prefix('talleres')->group(function () {
    Route::get('/', [TallerController::class, 'index']);
    Route::get('/danza', [TallerController::class, 'danza']);
    Route::get('/baile', [TallerController::class, 'baile']);
    Route::get('/oratoria', [TallerController::class, 'oratoria']);
    Route::get('/liderazgo', [TallerController::class, 'liderazgo']);
});
