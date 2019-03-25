<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificRoommateFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specific_roommate_filters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('roommate_id')->unsigned();
            $table->foreign('roommate_id')->references('id')->on('users');
            $table->integer('filter_id')->unsigned();
            $table->foreign('filter_id')->references('id')->on('roommate_filters');
            $table->tinyInteger('value');
            $table->tinyInteger('frequency');
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
        Schema::dropIfExists('specific_roommate_filters');
    }
}
