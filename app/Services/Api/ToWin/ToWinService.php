<?php

namespace App\Services\Api\ToWin;

use App\Repositories\ToWin\ToWinRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ToWinService
{
    private $toWinRepository;

    public function __construct(ToWinRepository $toWinRepository)
    {
        $this->toWinRepository = $toWinRepository;
    }

    public function getToWin(Request $request): Collection
    {
        $list = $this->toWinRepository->getWhere($request->id);

        if (!$list) {
            return response()->json(['message' => 'list empty']);
        }

        return $list;
    }
}
