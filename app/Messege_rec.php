<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messege_rec extends Model
{
    use HasFactory;
    protected $table = 'messege_rec';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'messege'
    ];

}
