<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemDrawersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drawers', function (Blueprint $table) {
            $table->string('photo')->after('vlan')->nullable();
            $table->double('latitude')->after('photo')->nullable();
            $table->double('length')->after('latitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drawers', function (Blueprint $table) {
            $table->dropColumn('photo');
            $table->dropColumn('latitude');
            $table->dropColumn('length');
        });
    }
}
