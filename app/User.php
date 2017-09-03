<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $fillable = [
        'pseudo',
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
        'birthdate',
        'portfolio_url',
    ];
}
