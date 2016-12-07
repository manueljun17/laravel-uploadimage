<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imageupload extends Model
{
  

    //the variable that sets which columns can be edited
    protected $fillable = [
        'title','image'
    ];

    //The variable which enables or disables the Laravel'stimestamps option. Default is true. We're leaving this hereanyways
    public $timestamps = true;
}
