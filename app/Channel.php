<?php

namespace App;

use App\User;

class Channel extends Model
{
    //

    public function user(){
        return $this->belongsTo(User::class);
    }
}
