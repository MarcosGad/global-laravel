<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cvlang extends Model
{
    protected $fillable = [
        'name', 'proficiency', 'user_id'
    ];
}
