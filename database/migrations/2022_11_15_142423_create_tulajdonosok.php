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
        Schema::create('tulajdonosok', function (Blueprint $table) {
            $table->id("t_id");
            $table->string("nev", 30);
            $table->dateTime("tulajdonjog_kezdete");
            $table->dateTime("tulajdonjog_vege");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tulajdonosok');
    }
};
