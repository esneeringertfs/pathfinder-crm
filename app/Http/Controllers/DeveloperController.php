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
     * Retrieve all Developers
     *
     * @return Developer[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->developerService->getAll();
    }


    /**
     * Retrieve Developer by Dev_Ref (primary key)
     *
     * @param $devRef
     * @return mixed
     *
     */
    public function getByDevRef($devRef)
    {
        return $this->developerService->getByDevRef($devRef);
    }

    /**
     * Store a new Developer
     *
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function create(Request $request)
    {
        $this->developerService->create($request);
    }

    /**
     * @param Request $request
     */
    public function update(Request $request)
    {
        $this->developerService->update($request);
    }

    /**
     * @param $devRef
     *
     */
    public function delete($devRef)
    {
        $this->developerService->delete($devRef);
    }

}
