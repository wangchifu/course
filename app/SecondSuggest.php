<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecondSuggest extends Model
{
    protected $table = "second_suggests";

    protected $fillable = [
        'user_id',
        'course_id',
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
