<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialSuggest133 extends Model
{
    protected $table = "special_suggests13_3";

    protected $fillable = [
        'user_id',
        'course_id',
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
