<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface TeamsRepositoryInterface
{
    public function getWhere($id): ?Collection;
}
