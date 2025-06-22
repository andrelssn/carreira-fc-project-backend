<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sponsors;
use App\Services\Api\Sponsors\SponsorsService;

class SponsorsController extends Controller
{
    private $sponsorsService;

    public function __construct(SponsorsService $sponsorsService)
    {
        $this->sponsorsService = $sponsorsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Sponsors::get();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $sponsors = $this->sponsorsService->getSponsors();

        if (!isset($sponsors)) {
            return 'error';
        }

        return $sponsors;
    }

}
