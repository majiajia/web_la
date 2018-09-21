<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thumb_img')->comment('案例对应的封面图的路径');
            $table->string('title')->comment('案例的标题');
            $table->string('brief')->comment('案例的简介');
            $table->string('content')->comment('案例的内容');
            $table->string('visit_count')->comment('访问次数');
            $table->string('is_show_index')->comment('是否显示在首页,1 显示 2 不显示'); 
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
        Schema::dropIfExists('cases');
    }
}
