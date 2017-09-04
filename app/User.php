<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
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

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }










}
