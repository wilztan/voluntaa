<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
    	'name',
    	'email',
    	'password',
    	'phone',
    	'address',
    	'websites',
    	'status',
    ];
}
