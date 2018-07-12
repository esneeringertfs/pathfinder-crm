<?php
/**
 * Created by PhpStorm.
 * User: esneeringer
 * Date: 7/12/18
 * Time: 1:13 PM
 */

namespace App\Services;

use App\Transaction as Transaction;
use Illuminate\Http\Request;

class TransactionService{

    /**
     * @return Transaction[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllTransactions(){
        return Transaction::all();
    }

    public function createTransaction(Request $request){
        $transaction = new Transaction;

        $transaction->Sales_Ref = $request->salesRef;
        $transaction->Close_Date = $request->closeDate;
        $transaction->Dev_Ref = $request->developerRef;
        $transaction->Proj_Ref = $request->projectRef;
        $transaction->Adv_Country = $request->advertiserCountry;
        $transaction->Unit_Num = $request->unitNum;
        $transaction->Type = $request->type;
        $transaction->Campaign_Ref = $request->campaignRef;

        $transaction->save();
    }
}