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
