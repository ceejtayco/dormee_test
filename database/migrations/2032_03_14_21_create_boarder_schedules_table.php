<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoarderSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boarder_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('boarder_id')->unsigned();
            $table->foreign('boarder_id')->references('id')->on('users');
            $table->timestamp('schedule');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP()'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP()'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boarder_schedules');
    }
}
