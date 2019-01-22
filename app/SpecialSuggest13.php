<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialSuggest13 extends Model
{
    protected $table = "special_suggests13";

    protected $fillable = [
        'user_id',
        'course_id',
        'c13_pass',
        'c13',
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
