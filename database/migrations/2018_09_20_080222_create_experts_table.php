<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->comment('1 专家 2 律师');
            $table->string('thumb_img')->comment('用户头像') ;
            $table->string('name');
            $table->string('title');
            $table->string('brief');
            $table->string('desc')->comment('具体描述');
            $table->integer('enabled')->comment('1 启用  2 禁用');

            $table->integer('visit_count');
            $table->integer('is_show_index')->comment('1 首页显示  2 不在首页显示');
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
        Schema::dropIfExists('experts');
    }
}
