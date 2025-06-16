<?php

use App\Http\Controllers\LeaguesController;
use App\Http\Controllers\TeamsController;
use App\Models\Logos;
use Illuminate\Support\Facades\Route;


Route::get('/imagem/{id_team}', function ($id_team) {
    $img = Logos::where('id_team', $id_team)->firstOrFail();

    return response($img->img)
        ->header('Content-Type', 'image/png');
});

Route::get('/leagues', [LeaguesController::class, 'index']);
// Route::get('/teams', [TeamsController::class, 'index']);

Route::prefix('teams')->group(function () {
    Route::controller(TeamsController::class)->group(function () {
        Route::get('', 'index');
        Route::get('{id}', 'list');
    });
});

