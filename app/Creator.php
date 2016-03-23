<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    //
    protected $fillable = ['country','postcode','user_id','home_address'];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function project(){
        return $this->hasMany('App\Project');
    }
}
