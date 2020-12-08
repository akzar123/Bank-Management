<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
       protected $table='accounts';
   protected $fillable = ['accno','bal','acctype','cid','branchno'];
   protected $primaryKey='id';
}
