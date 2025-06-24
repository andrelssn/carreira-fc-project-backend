<?php

namespace App\Repositories\ToWin;

use App\Interfaces\ToWinRepositoryInterface;
use App\Models\ToWin;
use Illuminate\Support\Collection;

class ToWinRepository implements ToWinRepositoryInterface
{
    function getWhere($id): Collection
    {
        $query = ToWin::query()
            ->where("id_team", $id)
            ->get();

        return $query;
    }
}
