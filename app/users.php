<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
     protected $table = 'users';
    protected $fillable = ['name','password'];//columns in database
    protected $primaryKey = 'id';
}
