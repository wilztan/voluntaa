<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'user_id',
    	'jobs_id',
    	'company_id',
    	'comment',
    ];
}
