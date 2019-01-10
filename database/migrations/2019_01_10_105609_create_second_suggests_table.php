<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecondSuggestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('second_suggests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');//評審
            $table->unsignedInteger('course_id');//course關聯用
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
        Schema::dropIfExists('second_suggests');
    }
}
