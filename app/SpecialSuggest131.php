<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialSuggest131 extends Model
{
    protected $table = "special_suggests13_1";

    protected $fillable = [
        'user_id',
        'course_id',
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
