<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstateTyoe extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
    	'type_name',
    ];

    public function estate()
    {
    	return $this->hasMany('App\Models\Estate', 'estate_type_id');
    }
}
