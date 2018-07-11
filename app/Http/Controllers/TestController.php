<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function helloWorld(){
        $buyer = DB::table('Buyer')->get();
        return $buyer;
    }
}
