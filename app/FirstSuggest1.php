<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirstSuggest1 extends Model
{
    protected $table = "first_suggests1";

    protected $fillable = [
        'user_id',
        'course_id',
        'c1_1_pass',
        'c1_1',
        'c1_2_pass',
        'c1_2',
        'c2_pass',
        'c2',
        'c3_1_pass',
        'c3_1',
        'c3_2_pass',
        'c3_2',
        'c3_3_pass',
        'c3_3',
        'c4_pass',
        'c4',
        'c6_pass',
        'c6',
        'c7_1_pass',
        'c7_1',
        'c7_2_pass',
        'c7_2',
        'c8_1_pass',
        'c8_1',
        'c8_2_pass',
        'c8_2',
        'c9_pass',
        'c9',
        'c10_1_pass',
        'c10_1',
        'c10_2_pass',
        'c10_2',
        'c11_pass',
        'c11',
        'c12_pass',
        'c12',
        'reason',
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
