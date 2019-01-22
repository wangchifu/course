<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialSuggests132Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_suggests13_2', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');//評審
            $table->unsignedInteger('course_id');//course關聯用
            $table->tinyInteger('c13_2_pass')->nullable();//是否通過
            $table->text('c13_2')->nullable();
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
        Schema::dropIfExists('special_suggests13_2');
    }
}
