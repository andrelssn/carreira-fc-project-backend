<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Leagues;
use Illuminate\Http\Request;

class LeaguesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Leagues::get();
    }
}
