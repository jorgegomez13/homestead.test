<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class users extends Model
{

    protected $hidden = [
        'password', 'remember_token',

    ];

    protected $fillable = [
        'email', 'name', 'password',
    ];
}
