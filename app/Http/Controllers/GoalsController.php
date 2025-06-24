<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Goals;
use App\Services\Api\Goals\GoalsService;
use Illuminate\Http\Request;

class GoalsController extends Controller
{
    private $goalsService;

    public function __construct(GoalsService $goalsService)
    {
        $this->goalsService = $goalsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Goals::get();
    }

    /**
     * Display a listing of the resource.
     */
    public function list(Request $request)
    {
        $goals = $this->goalsService->getGoals($request);

        if (!isset($goals)) {
            return 'error';
        }

        return $goals;
    }
}
