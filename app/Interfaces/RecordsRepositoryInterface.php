<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface RecordsRepositoryInterface
{
    public function getWhere($id): ?Collection;
}
