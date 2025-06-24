<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Api\Details\DetailsService;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    private $detailsService;

    public function __construct(DetailsService $detailsService)
    {
        $this->detailsService = $detailsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function list(Request $request)
    {
        $details = $this->detailsService->getDetails($request);

        if (!isset($details)) {
            return 'error';
        }

        return $details;
    }
}
