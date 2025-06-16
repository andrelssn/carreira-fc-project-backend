<?php

namespace App\Http\Resources;

use App\Models\Logos;
use App\Repositories\Teams\TeamsRepository;
use App\Services\Api\Teams\TeamsService;
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
        return [
            "Id"        => $this->id,
            "Name"      => $this->name,
            "City"      => $this->city,
            "Country"   => $this->country,
            "Stadium"   => $this->stadium,
            "Size"      => $this->size,
        ];
    }
}
