<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\School::truncate(); //清空資料庫

        $schools = config('course.schools');

        foreach($schools as $k=>$v){
            if(strpos($v, '國小') !== false) $i = "1";
            if(strpos($v, '國中') !== false) $i = "2";
            \App\School::create([
                'school_code' => $k,
                'school_name' => $v,
                'school_type' => $i,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }

    }
}
