<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlines', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->timestamps();
            $table->string('meeting_id');
            $table->string('host_id');
            $table->string('name');
            $table->string('start_time');
            $table->integer('duration')->comment('minutes');
            $table->string('password')->comment('meeting password');
            $table->string('start_url');
            $table->string('join_url');
            $table->string('permission');
            $table->string('etat');
            $table->string('description');
            $table->string('capacity');
            $table->string('participants');
            $table->string('join');
            $table->string('category');




           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('onlines');
    }
}
