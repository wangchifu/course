<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateC81TablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c8_1_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year');//學年
            $table->string('school_code');//學校代碼
            $table->string('grade');//年級
            $table->string('mandarin_book')->nullable();//國語文
            $table->string('dialects_book')->nullable();//本土
            $table->string('english_book')->nullable();//英文
            $table->string('mathematics_book')->nullable();//數學
            $table->string('life_curriculum_book')->nullable();//生活
            $table->string('social_studies_book')->nullable();//社會
            $table->string('science_technology_book')->nullable();//自然與生活科技
            $table->string('science_book')->nullable();//自然科學
            $table->string('arts_humanities_book')->nullable();//藝術與人文
            $table->string('integrative_activities_book')->nullable();//綜合活動
            $table->string('technology_book')->nullable();//科技
            $table->string('health_physical_book')->nullable();//健體
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
        Schema::dropIfExists('c8_1_tables');
    }
}
