<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('my_time_id');
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->datetime('start_time_def');
            $table->datetime('end_time_def');
            $table->datetime('published');
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
        Schema::drop('schedule');
    }
}
