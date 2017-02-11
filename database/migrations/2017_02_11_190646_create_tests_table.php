<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('status');
            $table->integer('type_id')->unsigned();
            $table->integer('frequency_type_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('start_date');
            $table->string('last_run_time');
            $table->string('next_run_time');
            $table->boolean('active');

            $table->foreign('type_id')->references('id')->on('test_types');
            $table->foreign('frequency_type_id')->references('id')->on('frequency_types');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('Tests');
    }
}
