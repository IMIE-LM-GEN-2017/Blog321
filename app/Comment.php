<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = [
        'content',
        'user_id',
        'post_id',
        'parent_id'
    ];

    // user:
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function post()
    {
        return $this->hasOne('App\Post');
    }

    public function parent()
    {
        return $this->hasOne('App\Comment', 'id', 'parent_id');
    }

    public function answers()
    {
        return $this->hasMany('App\Comment', 'parent_id', 'id');
    }


}
