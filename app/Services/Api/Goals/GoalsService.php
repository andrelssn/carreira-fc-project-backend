<?php

namespace App\Services\Api\Goals;

use App\Repositories\Goals\GoalsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class GoalsService
{
    private $goalsRepository;

    public function __construct(GoalsRepository $goalsRepository)
    {
        $this->goalsRepository = $goalsRepository;
    }

    public function getGoals(Request $request): Collection
    {
        $goals = $this->goalsRepository->getWhere($request->id);

        if (!$goals) {
            return response()->json(['message' => 'list empty']);
        }

        return $goals;
    }
}
