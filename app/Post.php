<?php

namespace webCS;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id','title','urlimg','body','create_at','update_at'];


}
