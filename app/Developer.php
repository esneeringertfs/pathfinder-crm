<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Developer extends Model
{
    use SoftDeletes;

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

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Define relationship between Developer and Transaction (One to Many)
     * https://laravel.com/docs/5.6/eloquent-relationships#one-to-many
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }
}
