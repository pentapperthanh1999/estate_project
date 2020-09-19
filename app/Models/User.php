<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'username',
        'email',
        'address',
        'phone',
        'image',
        'role_id',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
    	return $this->belongsToMany('App\Models\Role');
    }
}
