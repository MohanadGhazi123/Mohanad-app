<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{    
    use HasFactory;

    protected $fillable = ['text', 'posts_image'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');

    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }


}
