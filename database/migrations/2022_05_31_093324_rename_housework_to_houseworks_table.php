<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameHouseworkToHouseworksTable extends Migration
{
    


    public function up()
    {
        Schema::table('houseworks', function (Blueprint $table) {
        Schema::rename("housework","houseworks");
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
        Schema::rename('houseworks', "housework");
        });
    }
}
