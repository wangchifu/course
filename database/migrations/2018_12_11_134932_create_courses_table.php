<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year');
            $table->string('school_code');
            $table->tinyInteger('leading')->nullable();//1前導學校，null則不是
            $table->tinyInteger('c1_1')->nullable();//1有填，null則無
            $table->tinyInteger('c1_2')->nullable();//1有填，null則無
            $table->tinyInteger('c2')->nullable();//1有填，null則無
            $table->tinyInteger('c3_1')->nullable();//1有填，null則無
            $table->tinyInteger('c3_2')->nullable();//1有填，null則無
            $table->tinyInteger('c3_3')->nullable();//1有填，null則無
            $table->tinyInteger('c4')->nullable();//1有填，null則無
            $table->tinyInteger('c6')->nullable();//1有填，null則無
            $table->tinyInteger('c7_1')->nullable();//1有填，null則無
            $table->tinyInteger('c7_2')->nullable();//1有填，null則無
            $table->tinyInteger('c8_1')->nullable();//1有填，null則無
            $table->tinyInteger('c8_2')->nullable();//1有填，null則無
            $table->tinyInteger('c9')->nullable();//1有填，null則無
            $table->tinyInteger('c10_1')->nullable();//1有填，null則無
            $table->tinyInteger('c10_2_1')->nullable();//1有填，null則無
            $table->tinyInteger('c10_2_2')->nullable();//1有填，null則無
            $table->tinyInteger('c10_2_3')->nullable();//1有填，null則無
            $table->tinyInteger('c10_2_4')->nullable();//1有填，null則無
            $table->string('c10_2_date')->nullable();//課程計畫通過日期
            $table->tinyInteger('c11')->nullable();//1有填，null則無
            $table->tinyInteger('c12')->nullable();//1有填，null則無
            $table->tinyInteger('c13')->nullable();//1有填，null則無
            $table->tinyInteger('c13_1')->nullable();//1有填，null則無
            $table->tinyInteger('c13_2')->nullable();//1有填，null則無
            $table->tinyInteger('c13_3')->nullable();//1有填，null則無
            $table->tinyInteger('c14')->nullable();//1有填，null則無
            $table->unsignedInteger('special13_user_id')->nullable();//特審13者
            $table->unsignedInteger('special13_1_user_id')->nullable();//特審13_1者
            $table->unsignedInteger('special13_2_user_id')->nullable();//特審13_2者
            $table->unsignedInteger('special13_3_user_id')->nullable();//特審13_3者
            $table->unsignedInteger('first_user_id')->nullable();//初審者
            $table->string('first_result1')->nullable();//submit已送出，back退回再修改，pass通過但修改，ok通過，excellent優秀進複審
            $table->string('first_result2')->nullable();//submit已送出，back退回三修，ok通過
            $table->string('first_result3')->nullable();//submit已送出，ok通過
            $table->unsignedInteger('second_user_id')->nullable();//複審者
            $table->string('second_result')->nullable();//ok通過，excellent優秀
            $table->tinyInteger('open')->nullable();//狀況：1公開,null則不公開
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
