<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class C31Table extends Model
{
    protected $table = "c3_1_tables";

    protected $fillable = [
        'year',
        'school_code',
        'grade',
        'mandarin',
        'dialects',
        'english',
        'mathematics',
        'life_curriculum',
        'social_studies',
        'science_technology',
        'science',
        'arts_humanities',
        'integrative_activities',
        'technology',
        'health_physical',
        'alternative',
    ];
}
