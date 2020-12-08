<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
       protected $table='branch';
   protected $fillable = ['branchno','address'];
   protected $primaryKey='id';
   
}
