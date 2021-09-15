<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_jobs extends Model
{
    protected $fillable=[
        'type_jobs'
    ];

    public function dataUser(){
        return $this->belongsToMany('App\dataUser');
    }
}
