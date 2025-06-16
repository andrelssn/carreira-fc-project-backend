<?php

namespace App\Repositories\Biograph;

use App\Interfaces\BiographRepositoryInterface;
use App\Models\Biographs;
use Illuminate\Support\Collection;

class BiographRepository implements BiographRepositoryInterface
{
    function getWhere($id): Collection
    {
        $query = Biographs::query()
            ->where("id_team", $id)
            ->get();

        return $query;
    }
}
