<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Support\Str;
class Model extends BaseModel
{
    //

    public $incrementing = false;

    protected static function  boot(){

        parent::boot();

        static::creating( function($model) {

            //$model->id = Str::uuid();

            $model->{$model->getKeyName()} = (string) Str::uuid();
            //This is return unique ID (Primary Key)



        });
    }

    protected $guarded = [];
}
