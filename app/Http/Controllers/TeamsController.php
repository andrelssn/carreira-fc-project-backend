<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Api\Teams\TeamsService;
use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    private $teamsService;

    public function __construct(TeamsService $teamsService)
    {
        $this->teamsService = $teamsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Teams::get();
    }

    /**
     * Display a listing of the resource.
     */
    public function list(Request $request)
    {
        $teams = $this->teamsService->getList($request);

        if (!isset($teams)) {
            return 'error';
        }

        return $teams;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
