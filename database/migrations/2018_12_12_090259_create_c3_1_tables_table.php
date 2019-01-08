<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateC31TablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c3_1_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year');//學年
            $table->string('school_code');//學校代碼
            $table->string('grade');//年級
            $table->unsignedInteger('mandarin')->nullable();//國語文
            $table->unsignedInteger('dialects')->nullable();//本土
            $table->unsignedInteger('english')->nullable();//英文
            $table->unsignedInteger('mathematics')->nullable();//數學
            $table->unsignedInteger('life_curriculum')->nullable();//生活
            $table->unsignedInteger('social_studies')->nullable();//社會
            $table->unsignedInteger('science_technology')->nullable();//自然與生活科技
            $table->unsignedInteger('science')->nullable();//自然科學
            $table->unsignedInteger('arts_humanities')->nullable();//藝術與人文
            $table->unsignedInteger('integrative_activities')->nullable();//綜合活動
            $table->unsignedInteger('technology')->nullable();//科技
            $table->unsignedInteger('health_physical')->nullable();//健體
            $table->unsignedInteger('alternative')->nullable();//彈性
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
        Schema::dropIfExists('c3_1_tables');
    }
}
