<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * @var string
     */
    protected $table = 'Transaction';

    /**
     * @var string
     */
    protected $primaryKey = 'Sales_Ref';
}
