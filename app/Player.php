<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
//    protected $table="";
    protected $fillable=['name','nationality','matches','age','position','img_path','goal'];
//    public $timestamps=true;
}
