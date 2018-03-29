<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyRole extends Model
{
    protected $fillable = [
        'user_id', 
        'company_id', 
        'company_role',
        'status',
    ];
}
