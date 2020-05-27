<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrawersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drawers', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('serial_t_lindus')->unique();
            $table->string('ip_t_lindus')->unique();
            $table->string('command_center')->nullable();
            $table->string('review')->nullable();
            $table->string('order')->nullable();
            $table->string('circuit')->nullable();
            $table->string('location')->nullable();
            $table->string('vlan')->nullable();
            $table->string('state')->nullable();
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
        Schema::dropIfExists('drawers');
    }
}
