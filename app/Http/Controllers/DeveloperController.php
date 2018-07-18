<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService as DeveloperService;
use Illuminate\Http\Request;

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
     * Retrieve all Developers
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json($this->developerService->getAll(),200);
    }


    /**
     * Retrieve Developer by Dev_Ref (primary key)
     *
     * @param $devRef
     * @return \Illuminate\Http\JsonResponse
     */
    public function getByDevRef($devRef)
    {
        return response()->json($this->developerService->getByDevRef($devRef), 200);
    }

    /**
     * Store a new Developer
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        return response()->json($this->developerService->create($request), 201);
    }

    /**
     * Update existing Developer details
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        return response()->json($this->developerService->update($request),200);

    }

    /**
     * Delete Developer (Soft)
     *
     * @param $devRef
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($devRef)
    {
        return response()->json($this->developerService->delete($devRef),200);
    }

}
