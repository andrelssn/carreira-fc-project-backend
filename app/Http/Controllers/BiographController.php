<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Biographs;
use App\Services\Api\Biograph\BiographService;
use Illuminate\Http\Request;

class BiographController extends Controller
{
    private $biographService;

    public function __construct(BiographService $biographService)
    {
        $this->biographService = $biographService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Biographs::get();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $history = $this->biographService->getHistory($request);

        if (!isset($history)) {
            return 'error';
        }

        return $history;
    }

}
