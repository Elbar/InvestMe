<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $fillable = ['startMoney','endMoney','number','description'];

   public function project(){
       return $this->belongsTo('App\Project');
   }
}
