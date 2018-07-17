<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    /**
     * @var string
     */
    protected $table = 'Developer';

    /**
     * @var string
     */
    protected $primaryKey = 'Dev_Ref';

    /**
     * @var array
     */
    protected $fillable =['Dev_Ref'];
}
