<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService as DeveloperService;
use Illuminate\Http\Request;
use App\Developer;

class DeveloperController extends Controller
{
    /**
     * DeveloperController constructor.
     * @param DeveloperService $developerService
     */
    public function __construct(DeveloperService $developerService)
    {
        $this->developerService = $developerService;
    }

    /**
     * @return Developer[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->developerService->getAllDevelopers();
    }

    /**
     * @param Request $request
     */
    public function create(Request $request)
    {
        dd($request->Dev_Ref);
        $this->developerService->createDeveloper($request);
    }
}
