<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService as DeveloperService;
use Illuminate\Http\Request;
use App\Developer;
use Illuminate\Support\Facades\Input;

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
     * Store a new Developer
     *
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function store(Request $request)
    {
        $this->developerService->createDeveloper($request);
    }
}
