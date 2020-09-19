<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
    	'country_name',
    ];

    public function city()
    {
    	return $this->hasMany('App\Models\City', 'city_id');
    }
}
