<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate(); //清空資料庫
        \App\User::create([
            'username' => 'admin',
            'name' => '系統管理員',
            'group_id' => '9',
            'password' => bcrypt('demo1234'),
            'admin'=>'1',
            'login_type'=>'local',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        \App\User::create([
            'username' => 'special1',
            'name' => '特教委員1',
            'group_id' => '3',
            'password' => bcrypt('demo1234'),
            'login_type'=>'local',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        \App\User::create([
            'username' => 'special2',
            'name' => '特教委員2',
            'group_id' => '3',
            'password' => bcrypt('demo1234'),
            'login_type'=>'local',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        \App\User::create([
            'username' => 'first1',
            'name' => '初審委員1',
            'group_id' => '4',
            'password' => bcrypt('demo1234'),
            'login_type'=>'local',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        \App\User::create([
            'username' => 'first2',
            'name' => '初審委員2',
            'group_id' => '4',
            'password' => bcrypt('demo1234'),
            'login_type'=>'local',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        \App\User::create([
            'username' => 'second1',
            'name' => '複審委員1',
            'group_id' => '5',
            'password' => bcrypt('demo1234'),
            'login_type'=>'local',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        \App\User::create([
            'username' => 'second1',
            'name' => '複審委員2',
            'group_id' => '5',
            'password' => bcrypt('demo1234'),
            'login_type'=>'local',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
