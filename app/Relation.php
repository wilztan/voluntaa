<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    protected $fillable = [
        'user_id1', 
        'user_id2', 
        'status',
    ];
}
