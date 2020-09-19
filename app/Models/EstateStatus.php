<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstateStatus extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
    	'estate_status_name',
    ];

    public function estate()
    {
    	return $this->hasOne('App\Models\Estate', 'estate_status_id');
    }
}
