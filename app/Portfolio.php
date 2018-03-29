<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'jobtransaction_Id', 'job_Rate', 'user_Rate','Company_feedback','User_feedback',
    ];
}
