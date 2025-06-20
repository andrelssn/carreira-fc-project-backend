<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ToWin;
use App\Services\Api\ToWin\ToWinService;
use Illuminate\Http\Request;

class ToWinController extends Controller
{
    private $toWinService;

    public function __construct(ToWinService $toWinService)
    {
        $this->toWinService = $toWinService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ToWin::get();
    }

    /**
     * Display a listing of the resource.
     */
    public function list(Request $request)
    {
        $records = $this->toWinService->getToWin($request);

        if (!isset($records)) {
            return 'error';
        }

        return $records;
    }
}
