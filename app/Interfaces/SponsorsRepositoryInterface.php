<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface SponsorsRepositoryInterface
{
    public function getWhere(): ?Collection;
}
