<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string ('phone');
            $table->string ('fax');
            $table->string('address');
            $table->string('email');
            $table->string('desc')->comment('企业介绍简略');
            $table->string('desc_txt')->comment('企业介绍详细');;
            $table->integer('desc_visit_count');
            $table->string('desc_title');
            $table->string('fengcai')->comment('公司风采');
            $table->integer('fengcai_visit_count');
            $table->string('fengcai_title');
            $table->string('wenhua');
            $table->integer('wenhua_visit_count');
            $table->string('wenhua_title')->comment();
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
        Schema::dropIfExists('companies');
    }
}
