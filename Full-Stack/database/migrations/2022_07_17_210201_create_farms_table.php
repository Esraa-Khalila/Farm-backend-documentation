<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->integer('price')->nullable();
            $table->integer('space')->nullable();
            $table->string('images');
            $table->string('description')->nullable();
            $table->string('active');
            $table->time('time')->nullable();
            $table->string('facebook')->nullable();
            $table->integer('phone')->nullable();
            $table->string('day')->nullable();
            $table->integer('roomNumber')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            
            
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
        Schema::dropIfExists('farms');
    }
}
