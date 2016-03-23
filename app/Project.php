<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table='projects';
    protected $fillable=['title','content'];
<<<<<<< HEAD

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function creator(){
        return $this->belongsTo('App\Creator');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }

    public function condition(){
        return $this->hasOne('App\Condition');
    }

    public function donation(){
        return $this->hasOne('App\Donation');
    }

    public function backer(){
        return $this->hasMany('App\Backer');
    }
=======
>>>>>>> 6b420789e4911c0cd3c54f4998f6747ac91026e6
}
