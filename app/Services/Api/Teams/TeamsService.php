<?php

namespace App\Services\Api\Teams;

use App\Http\Resources\TeamsCollection;
use App\Models\Logos;
use App\Repositories\Teams\TeamsRepository;
use Illuminate\Http\Request;

class TeamsService
{
    private $teamsRepository;

    public function __construct(TeamsRepository $teamsRepository)
    {
        $this->teamsRepository = $teamsRepository;
    }

    public function getList(Request $request): TeamsCollection
    {
        $list = $this->teamsRepository->getWhere($request->id);

        if(!$list){
            return response()->json(['message' => 'list empty']);
        }

        return new TeamsCollection($list);
    }

    public function getLogo($id): Logos
    {
        $list = $this->teamsRepository->getLogo($id);

        if(!$list){
            return response()->json(['message' => 'list empty']);
        }

        return $list;
    }
}
