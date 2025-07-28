<?php

namespace App\Http\Resources;

use App\Repositories\Biograph\BiographRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamsResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $biographRepository = new BiographRepository;
        $biograph = $biographRepository->getWhere($this->id);

        return [
            "Id"               => $this->id,
            "Name"             => $this->name,
            "City"             => $this->city,
            "Country"          => $this->country,
            "Stadium"          => $this->stadium,
            "Size"             => $this->size,
            "History"          => $biograph[0]->history,
            "History_PTBR"     => $biograph[0]->history_ptbr,
            "Foundation"       => $biograph[0]->foundation,
            "Goalscorer"       => $biograph[0]->goalscorer,
            "Goalscorer_Total" => $biograph[0]->goalscorer_total,
        ];
    }
}
