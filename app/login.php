<?php

namespace App;

use Illuminate\Support\Collection;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

use App\login;

class login extends Model
{
	protected $table = 'login';

    protected $hidden = [
        'password', 'remember_token','created_at', 'updated_at',
    ];

}
