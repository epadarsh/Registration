<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',150);
            $table->unsignedBigInteger("mobile");
            $table->string('email')->nullable();
            $table->string('post')->nullable();
            $table->string('street')->nullable();
            $table->unsignedInteger('adults')->nullable();
            $table->unsignedInteger('children')->nullable();
            $table->unsignedBigInteger('donations')->nullable();
            $table->unsignedBigInteger('amount')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_data');
    }
}
