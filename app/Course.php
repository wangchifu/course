<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'year',
        'school_code',
        'c1_1',
        'c1_2',
        'c2',
        'c3_1',
        'c3_2',
        'c3_3',
        'c4',
        'c6',
        'c7_1',
        'c7_2',
        'c8_1',
        'c8_2',
        'c9',
        'c10_1',
        'c10_2_1',
        'c10_2_2',
        'c10_2_3',
        'c10_2_4',
        'c10_2_5',
        'c10_2_date',
        'c11',
        'c12',
        'c13',
        'c13_1',
        'c14',
        'special_user_id',
        'special_result',
        'first_user_id',
        'first_result1',
        'first_result2',
        'first_result3',
        'second_user_id',
        'second_result',
        'open',
    ];

    public function special_suggest()
    {
        return $this->hasOne(SpecialSuggest::class);
    }
    public function first_suggest1()
    {
        return $this->hasOne(FirstSuggest1::class);
    }
    public function first_suggest2()
    {
        return $this->hasOne(FirstSuggest2::class);
    }
    public function first_suggest3()
    {
        return $this->hasOne(FirstSuggest3::class);
    }
}
