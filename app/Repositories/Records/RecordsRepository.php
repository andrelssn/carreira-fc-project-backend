<?php

namespace App\Repositories\Records;

use App\Interfaces\AchievementsRepositoryInterface;
use App\Models\Records;
use Illuminate\Support\Collection;

class RecordsRepository implements AchievementsRepositoryInterface
{
    function getWhere($id): Collection
    {
        $query = Records::query()
            ->where("id_team", $id)
            ->get();

        return $query;
    }
}
