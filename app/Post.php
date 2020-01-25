<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "title",
        "body",
        "pict",
        "date_creation_post"
    ];

    public function category() {
        return $this -> belongsTo(Category::class);
    }
    public function comments() {
        return $this -> hasMany(Comment::class);
    }
}
