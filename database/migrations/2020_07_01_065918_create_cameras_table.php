<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cameras', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2020_05_09_184029_create_cameras_table.php
            $table->string('ip_camera');
            $table->string('photo');
            $table->integer('operability_id')->unsigned()->default(0);
            $table->integer('drawer_id')->unsigned()->default(0);
=======
>>>>>>> 74f4aef312aa2d59aaaa5f274cfd0e3310489840:database/migrations/2020_07_01_065918_create_cameras_table.php
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
        Schema::dropIfExists('cameras');
    }
}
