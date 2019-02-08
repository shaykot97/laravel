<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['src'];

    public function getSrcAttribute($name){
        return 'images/'.$name;
    }
}
