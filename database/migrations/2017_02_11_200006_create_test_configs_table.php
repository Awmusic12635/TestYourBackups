<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aws_access_key');
            $table->string('aws_secret_key');
            $table->string('s3_bucket_id');
            $table->string('b2_account_id');
            $table->string('b2_application_id');
            $table->string('b2_bucket_name');
            $table->string('email');
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
        Schema::dropIfExists('test_configs');
    }
}
