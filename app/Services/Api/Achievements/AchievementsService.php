<?php

namespace App\Services\Api\Achievements;

use App\Repositories\Achievements\AchievementsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class AchievementsService
{
    private $achievementsRepository;

    public function __construct(AchievementsRepository $achievementsRepository)
    {
        $this->achievementsRepository = $achievementsRepository;
    }

    public function getAchievements(Request $request): Collection
    {
        $list = $this->achievementsRepository->getWhere($request->id);

        if (!$list) {
            return response()->json(['message' => 'list empty']);
        }

        return $list;
    }
}
