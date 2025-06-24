<?php

namespace App\Repositories\Goals;

use App\Interfaces\GoalsRepositoryInterface;
use App\Models\Goals;
use Illuminate\Support\Collection;

class GoalsRepository implements GoalsRepositoryInterface
{
    function getWhere($id): Collection
    {
        $query = Goals::query()
            ->where("id_team", $id)
            ->get();

        return $query;
    }
}
