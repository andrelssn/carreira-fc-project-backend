<?php

use App\Http\Controllers\LeaguesController;
use App\Http\Controllers\TeamsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/leagues', [LeaguesController::class, 'index']);
Route::get('/teams', [TeamsController::class, 'index']);
