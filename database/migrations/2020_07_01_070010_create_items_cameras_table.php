<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsCamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cameras', function (Blueprint $table) {
            $table->string('ip_camera')->after('id');
            $table->string('photo')->after('ip_camera');
            $table->integer('operability_id')->after('photo')->unsigned()->default(0);
            $table->integer('drawer_id')->after('operability_id')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cameras', function (Blueprint $table) {
            $table->dropColumn('ip_camera');
            $table->dropColumn('photo');
            $table->dropColumn('operability_id');
            $table->dropColumn('drawer_id');
        });
    }
}
