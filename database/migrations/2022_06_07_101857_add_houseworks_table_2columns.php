<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHouseworksTable2columns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('houseworks', function (Blueprint $table) {
            $table->INTEGER('user_id');
            $table->INTEGER("housework_id");
            $table->primary("housework_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('houseworks', function (Blueprint $table) {
            //
        });
    }
}
