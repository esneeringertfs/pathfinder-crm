<?php
/**
 * Created by PhpStorm.
 * User: esneeringer
 * Date: 7/12/18
 * Time: 3:32 PM
 */

namespace App\Services;

use App\Developer as Developer;
use Illuminate\Http\Request;

/**
 * Class DeveloperService
 * @package App\Services
 */
class DeveloperService{

    /**
     * @param Request $request
     */
    public function createDeveloper($request)
    {
        $developer = new Developer;

        $developer->Dev_Ref = $request->Dev_Ref;
        $developer->Dev_Internal_Ref = $request->Dev_Internal_Ref;
        $developer->Dev_Code = $request->Dev_Code;
        $developer->Dev_Name = $request->Dev_Name;
        $developer->Cntry_of_Incorp = $request->Cntry_of_Incorp;
        $developer->Dev_Vat_Num = $request->Dev_Vat_Num;
        $developer->Address_1 = $request->Address_1;
        $developer->Address_2 = $request->Address_2;
        $developer->Address_3 = $request->Address_3;
        $developer->Address_4 = $request->Address_4;
        $developer->Address_5 = $request->Address_5;

        $developer->save();

    }

    /**
     * @return Developer[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllDevelopers()
    {
        return Developer::all();
    }
}