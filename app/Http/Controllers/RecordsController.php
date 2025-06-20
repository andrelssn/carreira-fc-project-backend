<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Records;
use App\Services\Api\Records\RecordsService;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    private $recordsService;

    public function __construct(RecordsService $recordsService)
    {
        $this->recordsService = $recordsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Records::get();
    }

    /**
     * Display a listing of the resource.
     */
    public function list(Request $request)
    {
        $records = $this->recordsService->getRecords($request);

        if (!isset($records)) {
            return 'error';
        }

        return $records;
    }
}
