<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class C81Table extends Model
{
    protected $table = "c8_1_tables";

    protected $fillable = [
        'year',
        'school_code',
        'grade',
        'mandarin_book',
        'dialects_book',
        'english_book',
        'mathematics_book',
        'life_curriculum_book',
        'social_studies_book',
        'science_technology_book',
        'science_book',
        'arts_humanities_book',
        'integrative_activities_book',
        'technology_book',
        'health_physical_book',
    ];
}
