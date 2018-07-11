<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Developer;

class DeveloperController extends Controller
{
    //
    public function index()
    {
        return Developer::all();
    }
}
