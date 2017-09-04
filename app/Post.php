<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable=[
        'title',
        'content',
        'user_id',
        'category_id',
    ];
    
    // User
    public function user(){
        return $this->belongsTo('App\User');
    }
    // Comments
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    // Categories
    public function category(){
        return $this->belongsTo('App\Category');
    }
    // Tags
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
