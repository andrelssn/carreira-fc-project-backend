<?php

namespace App\Services\Api\Details;

use App\Repositories\Achievements\AchievementsRepository;
use App\Repositories\Goals\GoalsRepository;
use App\Repositories\Records\RecordsRepository;
use App\Repositories\ToWin\ToWinRepository;
use Illuminate\Http\Request;

class DetailsService
{
    private $achievementsRepository;
    private $goalsRepository;
    private $recordsRepository;
    private $toWinRepository;

    public function __construct(GoalsRepository $goalsRepository, AchievementsRepository $achievementsRepository, RecordsRepository $recordsRepository, ToWinRepository $toWinRepository)
    {
        $this->achievementsRepository = $achievementsRepository;
        $this->goalsRepository = $goalsRepository;
        $this->recordsRepository = $recordsRepository;
        $this->toWinRepository = $toWinRepository;
    }

    public function getDetails(Request $request): array
    {
        $list = [];

        $list['Goals'] = $this->goalsRepository->getWhere($request->id);
        $list['Achievements'] = $this->achievementsRepository->getWhere($request->id);
        $list['Records'] = $this->recordsRepository->getWhere($request->id);
        $list['ToWin'] = $this->toWinRepository->getWhere($request->id);

        return $list;
    }
}
