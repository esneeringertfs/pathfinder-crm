<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use App\Services\TransactionService as TransactionService;

class TransactionController extends Controller
{
    /**
     * @var TransactionService
     */
    protected $transactionService;

    /**
     * TransactionController constructor.
     * @param TransactionService $transactionService
     */
    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    /**
     * Retrieve all Transactions
     * @return Transaction[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return $this->transactionService->getAllTransactions();
    }

    /**
     * @param Request $request
     * @return null
     */
    public function create(Request $request)
    {
        return $this->transactionService->createTransaction($request);
    }
}
