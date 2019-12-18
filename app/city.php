<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table = "city";
    protected $fillable = ['id','name','slug','created_at','updated_at'];
}
