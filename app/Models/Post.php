<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'content',
        'image',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class)->orderBy('created_at','desc');
    }

    public function reactions(){
        return $this->hasMany(Reaction::class);
    }
}
