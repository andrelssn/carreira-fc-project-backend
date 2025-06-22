<?php

use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\BiographController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\LeaguesController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\ToWinController;
use App\Models\Logos;
use App\Models\LogosSponsors;
use Illuminate\Support\Facades\Route;


Route::get('/imagem/{id_team}', function ($id_team) {
    $img = Logos::where('id_team', $id_team)->firstOrFail();

    return response($img->img)
        ->header('Content-Type', 'image/png');
});

Route::get('/leagues', [LeaguesController::class, 'index']);

Route::prefix('teams')->group(function () {
    Route::controller(TeamsController::class)->group(function () {
        Route::get('', 'index');
        Route::get('{id}', 'list');
    });
});

Route::prefix('history')->group(function () {
    Route::controller(BiographController::class)->group(function () {
        Route::get('', 'index');
        Route::get('{id}', 'show');
    });
});

Route::prefix('details')->group(function () {
    Route::prefix('goals')->group(function () {
        Route::controller(GoalsController::class)->group(function () {
            Route::get('', 'index');
            Route::get('{id}', 'list');
        });
    });

    Route::prefix('achievements')->group(function () {
        Route::controller(AchievementsController::class)->group(function () {
            Route::get('', 'index');
            Route::get('{id}', 'list');
        });
    });

    Route::prefix('records')->group(function () {
        Route::controller(RecordsController::class)->group(function () {
            Route::get('', 'index');
            Route::get('{id}', 'list');
        });
    });

    Route::prefix('towin')->group(function () {
        Route::controller(ToWinController::class)->group(function () {
            Route::get('', 'index');
            Route::get('{id}', 'list');
        });
    });

    Route::controller(DetailsController::class)->group(function () {
        Route::get('{id}', 'list');
    });
});

Route::prefix('sponsors')->group(function () {
    Route::controller(SponsorsController::class)->group(function () {
        Route::get('', 'show');
    });

    Route::get('/logo/{id_sponsor}', function ($id_sponsor) {
        $img = LogosSponsors::where('id_sponsor', $id_sponsor)->firstOrFail();

        return response($img->img)
            ->header('Content-Type', 'image/png');
    });
});
