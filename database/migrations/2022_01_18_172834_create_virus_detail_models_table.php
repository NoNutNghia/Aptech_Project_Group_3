<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirusDetailModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virus_detail_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('location_of_origin');
            $table->longText('detail_description');
            $table->longText('spread');
            $table->integer('number_of_infections');
            $table->integer('number_of_death');
            $table->longText('precaution_required');
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
        Schema::dropIfExists('virus_detail_models');
    }
}
