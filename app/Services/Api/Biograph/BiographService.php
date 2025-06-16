<?php

namespace App\Services\Api\Biograph;

use App\Repositories\Biograph\BiographRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class BiographService
{
    private $biographRepository;

    public function __construct(BiographRepository $biographRepository)
    {
        $this->biographRepository = $biographRepository;
    }

    public function getHistory(Request $request): Collection
    {
        $list = $this->biographRepository->getWhere($request->id);

        if (!$list) {
            return response()->json(['message' => 'list empty']);
        }

        return $list;
    }
}
