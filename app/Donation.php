<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //
    public function backer(){
        return $this->belongsTo('App\Backer');
    }

    public function project(){
        return $this->belongsTo('App\Project');
    }
}
