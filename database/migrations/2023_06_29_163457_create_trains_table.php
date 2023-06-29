<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company', 80)->nullable();
            $table->string('departure_station', 100)->nullable();
            $table->string('arrival_station', 100)->nullable();
            $table->time("departure_time", $precision = 0)->nullable();
            $table->time('arrival_time', $precision = 0)->nullable();
            $table->integer('train_code')->nullable();
            $table->integer('train_carriages')->nullable();
            $table->boolean('on_time')->nullable();
            $table->boolean('deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
