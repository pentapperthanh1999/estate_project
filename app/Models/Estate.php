<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
    	'estate_name',
    	'city_id',
    	'estate_type_id',
    	'floor_space',
    	'number_of_balconies',
    	'number_of_living_rooms',
    	'number_of_bedrooms',
    	'number_of_bathrooms',
    	'number_of_garages',
    	'number_of_parking_spaces',
    	'estate_description',
        'estate_price',
    	'estate_status_id',
    ];

    public function city()
    {
    	return $this->belongsTo('App\Models\City', 'city_id');
    }

    public function estate_type()
    {
    	return $this->belongsTo('App\Models\EstateType', 'estate_type_id');
    }

    public function in_charge()
    {
    	return $this->belongsTo('App\Models\InCharge', 'user_id');
    }

    public function estate_status()
    {
    	return $this->belongsTo('App\Models\EstateStatus', 'estate_status_id');
    }
}
