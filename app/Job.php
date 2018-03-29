<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'jobtype_id',
        'jobs_requirement',
        'description', 
        'price',
        'status',
        'location',
        'company_id',
    ];
}
