<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\type_jobs;
use App\roles;

class dataUser extends Model
{
    protected $fillable = [
        'salary','level','first_name','last_name','birth_day','birth_month','birth_year','gender','nationality','marital_status','military_status','driving_license','country','city','area','mobile_number','user_id',
    ];

    public function type_jobs(){
        return $this->belongsToMany('App\type_jobs');
    }

    public function roles(){
        return $this->belongsToMany('App\roles');
    }
}
