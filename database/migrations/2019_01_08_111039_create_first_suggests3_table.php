<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstSuggests3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_suggests3', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');//評審
            $table->unsignedInteger('course_id');//course關聯用
            $table->tinyInteger('c1_1_pass')->nullable();//是否通過
            $table->text('c1_1')->nullable();
            $table->tinyInteger('c1_2_pass')->nullable();//是否通過
            $table->text('c1_2')->nullable();
            $table->tinyInteger('c2_pass')->nullable();//是否通過
            $table->text('c2')->nullable();
            $table->tinyInteger('c3_1_pass')->nullable();//是否通過
            $table->text('c3_1')->nullable();
            $table->tinyInteger('c3_2_pass')->nullable();//是否通過
            $table->text('c3_2')->nullable();
            $table->tinyInteger('c3_3_pass')->nullable();//是否通過
            $table->text('c3_3')->nullable();
            $table->tinyInteger('c4_pass')->nullable();//是否通過
            $table->text('c4')->nullable();
            $table->tinyInteger('c6_pass')->nullable();//是否通過
            $table->text('c6')->nullable();
            $table->tinyInteger('c7_1_pass')->nullable();//是否通過
            $table->text('c7_1')->nullable();
            $table->tinyInteger('c7_2_pass')->nullable();//是否通過
            $table->text('c7_2')->nullable();
            $table->tinyInteger('c8_1_pass')->nullable();//是否通過
            $table->text('c8_1')->nullable();
            $table->tinyInteger('c8_2_pass')->nullable();//是否通過
            $table->text('c8_2')->nullable();
            $table->tinyInteger('c9_pass')->nullable();//是否通過
            $table->text('c9')->nullable();
            $table->tinyInteger('c10_1_pass')->nullable();//是否通過
            $table->text('c10_1')->nullable();
            $table->tinyInteger('c10_2_pass')->nullable();//是否通過
            $table->text('c10_2')->nullable();
            $table->tinyInteger('c11_pass')->nullable();//是否通過
            $table->text('c11')->nullable();
            $table->tinyInteger('c12_pass')->nullable();//是否通過
            $table->text('c12')->nullable();
            $table->text('reason')->nullable();//原因
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
        Schema::dropIfExists('first_suggests3');
    }
}
