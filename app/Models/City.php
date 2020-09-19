<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
    	'city_name',
    	'country_id',
    ];

    public function country()
    {
    	return $this->belongsTo('App\Models\Country', 'country_id');
    }
}
