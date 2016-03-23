<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function backer(){
        return $this->hasOne('App\Backer');
    }
    public function comment(){
        return $this->hasMany('App\Comment');
    }

    public function creator(){
        return $this->hasOne('App\Creator');
    }
}
