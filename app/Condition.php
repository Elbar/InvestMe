<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    protected $fillable = ['startMoney','endMoney','number','description','project_id'];

   public function project(){
       return $this->belongsTo('App\Project');
   }
}
