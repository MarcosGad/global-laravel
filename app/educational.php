<?php

namespace App;
use App\language;
use App\proficiency;

use Illuminate\Database\Eloquent\Model;

class educational extends Model
{
    protected $fillable = [
        'educational_level','degree_details','university_institution','your_degree','grade','skills','featrued','user_id',
    ];

    public function getFeatruedAttribute($featrued){
        return asset($featrued);
    }

}
