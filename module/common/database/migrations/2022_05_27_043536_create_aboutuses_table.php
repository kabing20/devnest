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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();

            $table->longText('description')->nullable();
            $table->string('best_choice_title')->nullable();
            $table->longText('best_choice_description')->nullable();
            $table->string('best_choice_image')->nullable();
            $table->longText('motto')->nullable();
            $table->longText('vision_description')->nullable();
            $table->longText('mission_description')->nullable();
            $table->longText('goal_description')->nullable();
            $table->longText('video_banner')->nullable();
            $table->longText('video_banner_url')->nullable();
            $table->longText('video_banner_thumb')->nullable();


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
        Schema::dropIfExists('about_us');
    }
};
