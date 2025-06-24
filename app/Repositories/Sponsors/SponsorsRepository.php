<?php

namespace App\Repositories\Sponsors;

use App\Interfaces\SponsorsRepositoryInterface;
use App\Models\Sponsors;
use Illuminate\Support\Collection;

class SponsorsRepository implements SponsorsRepositoryInterface
{
    function getWhere(): Collection
    {
        $query = Sponsors::query()
            ->get();

        return $query;
    }
}
