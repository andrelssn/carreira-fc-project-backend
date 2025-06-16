<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface BiographRepositoryInterface
{
    public function getWhere($id): ?Collection;
}
