<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'user_Id1', 'user_Id2', 'messages',
    ];
}
