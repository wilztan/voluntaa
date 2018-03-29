<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTransaction extends Model
{
    protected $fillable = [
        'user_id', 
        'jobs_id', 
        'status',
        'bidPrice',
    ];
}
