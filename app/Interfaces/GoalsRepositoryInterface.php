<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface GoalsRepositoryInterface
{
    public function getWhere($id): ?Collection;
}
