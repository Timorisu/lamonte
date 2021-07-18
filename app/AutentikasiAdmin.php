<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutentikasiAdmin extends Model
{
    protected $table = 'user';
    public $timestamps = false;

    protected $fillable = [
        'username'
    ];
    protected $hidden = [
        'password'
    ];
}
