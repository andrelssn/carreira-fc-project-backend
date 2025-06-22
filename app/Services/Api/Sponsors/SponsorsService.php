<?php

namespace App\Services\Api\Sponsors;

use App\Repositories\Sponsors\SponsorsRepository;
use Illuminate\Support\Collection;

class SponsorsService
{
    private $sponsorsRepository;

    public function __construct(SponsorsRepository $sponsorsRepository)
    {
        $this->sponsorsRepository = $sponsorsRepository;
    }

    public function getSponsors(): Collection
    {
        $list = $this->sponsorsRepository->getWhere();

        if (!$list) {
            return response()->json(['message' => 'list empty']);
        }

        return $list;
    }
}
