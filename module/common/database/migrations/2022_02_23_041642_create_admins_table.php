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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('token')->nullable();
            $table->string('token_verified')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        \Module\Common\Models\Admin::create([
            'name' => 'Admin',
            'email' => 'admin@developer.com',
            'password' => bcrypt('password'),
            'token_verified' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
