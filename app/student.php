<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
   protected $table='student';
   protected $fillable = ['name','cid','no','address','pasw'];
   protected $primaryKey='id';
}
