<?php

namespace webCS;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name','slug'
    ];

   
    public function posts(){
        return $this->belongsToMany(Post::class);
    }

}
