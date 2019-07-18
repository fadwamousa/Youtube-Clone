<?php

namespace App;


use Illuminate\Support\Str;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $incrementing = false;

    protected static function  boot(){

        parent::boot();

        static::creating( function($model) {

            //$model->id = Str::uuid();

            $model->{$model->getKeyName()} = Str::uuid();
            //This is return unique ID (Primary Key)



        });
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function channel(){
        return $this->hasOne(Channel::class);
    }
}
