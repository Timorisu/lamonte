<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MessegeRec extends Model
{
    
    protected $table = 'messege_rec';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'messege'
    ];
}
