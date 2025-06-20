<?php

namespace App\Repositories\Achievements;

use App\Interfaces\AchievementsRepositoryInterface;
use App\Models\Achievements;
use Illuminate\Support\Collection;

class AchievementsRepository implements AchievementsRepositoryInterface
{
    function getWhere($id): Collection
    {
        $query = Achievements::query()
            ->where("id_team", $id)
            ->get();

        return $query;
    }
}
