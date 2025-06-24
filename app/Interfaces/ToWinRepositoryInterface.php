<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface ToWinRepositoryInterface
{
    public function getWhere($id): ?Collection;
}
