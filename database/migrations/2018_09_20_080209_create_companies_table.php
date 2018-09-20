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
            $table->string('company_desc')->comment('企业介绍');
            $table->string('company_desc_txt')->comment('企业介绍文本版');;
            $table->integer('company_desc_visit_count');
            $table->string('company_desc_title');
            $table->string('company_fengcai')->comment('公司风采');
            $table->integer('company_fengcai_visit_count');
            $table->string('company_fengcai_title');
            $table->string('company_wenhua');
            $table->integer('company_wenhua_visit_count');
            $table->string('company_wenhua_title')->comment();
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
