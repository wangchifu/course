<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialSuggest extends Model
{
    protected $fillable = [
        'user_id',
        'course_id',
        'c13_pass',
        'c13',
        'c13_1_pass',
        'c13_1',
        'c13_2_pass',
        'c13_2',
        'c13_3_pass',
        'c13_3',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
