<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class indexing extends Model
{
    protected $table = "indexing";
    protected $fillable = ['id','id_tags','name','slug','created_at','updated_at'];
}
