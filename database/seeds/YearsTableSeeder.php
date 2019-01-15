<?php

use Illuminate\Database\Seeder;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Year::truncate(); //清空資料庫
        \App\Course::truncate(); //清空資料庫
        $year = \App\Year::create([
            'year' => '107',
            'e1' => '9year',
            'e2' => '9year',
            'e3' => '9year',
            'e4' => '9year',
            'e5' => '9year',
            'e6' => '9year',
            'j1' => '9year',
            'j2' => '9year',
            'j3' => '9year',
            'step1_date1'=>'2018-06-15',
            'step1_date2'=>'2018-07-20',
            'step2_date1'=>'2018-07-20',
            'step2_date2'=>'2018-07-23',
            'step3_date1'=>'2018-07-24',
            'step3_date2'=>'2018-08-25',
            'step4_date1'=>'2018-07-24',
            'step4_date2'=>'2018-07-31',
            'step5_date1'=>'2018-08-07',
            'step5_date2'=>'2018-08-17',
            'step6_date1'=>'2018-08-21',
            'step6_date2'=>'2019-07-31',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        $schools = config('course.schools');
        foreach($schools as $k=>$v){
            $all[] = [
                'year'=>$year->year,
                'school_code'=>$k,
                'created_at'=>now(),
                'updated_at'=>now(),
            ];
        }
        \App\Course::insert($all);
    }
}
