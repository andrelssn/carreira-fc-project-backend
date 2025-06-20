<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Achievements;
use App\Services\Api\Achievements\AchievementsService;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    private $achievementsService;

    public function __construct(AchievementsService $achievementsService)
    {
        $this->achievementsService = $achievementsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Achievements::get();
    }

    /**
     * Display a listing of the resource.
     */
    public function list(Request $request)
    {
        $achievements = $this->achievementsService->getAchievements($request);

        if (!isset($achievements)) {
            return 'error';
        }

        return $achievements;
    }
}
