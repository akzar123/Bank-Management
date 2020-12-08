<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
       protected $table='loan';
   protected $fillable = ['loantype','amount','cid','branchno','accno'];
   protected $primaryKey='id';
}
