<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Column provider_user_id is facebook's user id
 * In our case provider is Facebook
 */
class SocialAccount extends Model
{

    protected $fillable = ['user_id', 'provider_user_id', 'provider_id'];


    public function  user() {
        return $this->belongsTo(User::class);

    }
}
