<?php

namespace App\Services\Api\Records;

use App\Repositories\Records\RecordsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class RecordsService
{
    private $recordsRepository;

    public function __construct(RecordsRepository $recordsRepository)
    {
        $this->recordsRepository = $recordsRepository;
    }

    public function getRecords(Request $request): Collection
    {
        $list = $this->recordsRepository->getWhere($request->id);

        if (!$list) {
            return response()->json(['message' => 'list empty']);
        }

        return $list;
    }
}
