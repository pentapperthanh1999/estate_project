<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InCharge extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
        'estate_id',
        'user_id',
        'date_from',
        'date_to',
    ];

    public function estate()
    {
    	return $this->hasMany('App\Models\Estate', 'estate_id');
    }
}
