<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificDormFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specific_dorm_filters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dorm_id')->unsigned();
            $table->foreign('dorm_id')->references('id')->on('dorms');
            $table->integer('filter_id')->unsigned();
            $table->foreign('filter_id')->references('id')->on('dorm_filters');
            $table->tinyInteger('value');
            $table->tinyInteger('quantity');
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
        Schema::dropIfExists('specific_dorm_filters');
    }
}
