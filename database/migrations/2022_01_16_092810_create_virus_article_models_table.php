<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirusArticleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virus_article_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('year_originated');
            $table->integer('type_id');
            $table->string('img');
            $table->string('img_detail');
            $table->string('img_precaution');
            $table->longText('description');
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
        Schema::dropIfExists('virus_article_models');
    }
}
