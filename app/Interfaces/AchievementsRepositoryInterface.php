<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface AchievementsRepositoryInterface
{
    public function getWhere($id): ?Collection;
}
