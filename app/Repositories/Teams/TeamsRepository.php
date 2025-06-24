<?php

namespace App\Repositories\Teams;

use App\Interfaces\TeamsRepositoryInterface;
use App\Models\Logos;
use App\Models\Teams;
use Illuminate\Support\Collection;

class TeamsRepository implements TeamsRepositoryInterface
{
    function getWhere($id): Collection
    {
        $query = Teams::query()
            ->where("id_league", $id)
            ->get();

        return $query;
    }

    function getLogo($id): Logos
    {
        $query = Logos::query()
            ->where("id_team", $id)
            ->firstOrFail();

        return $query;
    }
}
