<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicaldata_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('techinical_data_id')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('short_description')->nullable();
            $table->string('file')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            // $table->foreign('techinical_data_id')->on('techinical_data')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technicaldata_files');
    }
};
