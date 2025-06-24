<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Api\Teams\TeamsService;
use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    private $teamsService;

    public function __construct(TeamsService $teamsService)
    {
        $this->teamsService = $teamsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Teams::get();
    }

    /**
     * Display a listing of the resource.
     */
    public function list(Request $request)
    {
        $teams = $this->teamsService->getList($request);

        if (!isset($teams)) {
            return 'error';
        }

        return $teams;
    }
}
