<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialSuggest132 extends Model
{
    protected $table = "special_suggests13_2";

    protected $fillable = [
        'user_id',
        'course_id',
        'c13_2_pass',
        'c13_2',
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
