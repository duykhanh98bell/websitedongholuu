<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table = "detail";
    protected $fillable = ['id','id_index','id_city','creator','title','images','content','content','slug','views','status','created_at','updated_at'];
}
