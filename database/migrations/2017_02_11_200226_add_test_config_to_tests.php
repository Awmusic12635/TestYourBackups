<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTestConfigToTests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tests', function ($table) {
            $table->integer('test_config_id')->unsigned();
            $table->foreign('test_config_id')->references('id')->on('test_configs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tests', function ($table) {
            $table->dropForeign(['test_config_id']);
            $table->dropColumn('test_config_id');
        });
    }
}
