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
 *
 * Class DeveloperService
 * @package App\Services
 *
 */
class DeveloperService{

    /**
     * Create new Developer
     *
     * @param Request $request
     *
     */
    public function create(Request $request)
    {
        $developer = new Developer;

        $developer->Dev_Ref = $request->input('Dev_Ref');
        $developer->Dev_Internal_Ref = $request->input('Dev_Internal_Ref');
        $developer->Dev_Code = $request->input('Dev_Code');
        $developer->Dev_Name = $request->input('Dev_Name');
        $developer->Cntry_of_Incorp = $request->input('Cntry_of_Incorp');
        $developer->Dev_Vat_Num = $request->input('Dev_Vat_Num');
        $developer->Address_1 = $request->input('Address_1');
        $developer->Address_2 = $request->input('Address_2');
        $developer->Address_3 = $request->input('Address_3');
        $developer->Address_4 = $request->input('Address_4');
        $developer->Address_5 = $request->input('Address_5');

        $developer->save();

    }

    /**
     * Get all Developers
     *
     * @return Developer[]|\Illuminate\Database\Eloquent\Collection
     *
     */
    public function getAll()
    {
        return Developer::all();
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
        return Developer::where('Dev_Ref', $devRef)->first();
    }

    /**
     * Update Developer
     *
     * @param Request $request
     *
     */
    public function update(Request $request)
    {
        Developer::where('Dev_Ref', $request->input('Dev_Ref'))
            ->update([
                'Dev_Ref' => $request->input('Dev_Ref'),
                'Dev_Internal_Ref' => $request->input('Dev_Internal_Ref'),
                'Dev_Code' => $request->input('Dev_Code'),
                'Dev_Name' => $request->input('Dev_Name'),
                'Cntry_of_Incorp' => $request->input('Cntry_of_Incorp'),
                'Dev_Vat_Num' => $request->input('Dev_Vat_Num'),
                'Address_1' => $request->input('Address_1'),
                'Address_2' => $request->input('Address_2'),
                'Address_3' => $request->input('Address_3'),
                'Address_4' => $request->input('Address_4'),
                'Address_5' => $request->input('Address_5')
            ]);
    }

    /**
     * Delete Developer (Soft Delete)
     *
     * @param $devRef
     *
     */
    public function delete($devRef)
    {
        $developer = Developer::find($devRef);

        $developer->delete();
    }

}