<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDormAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dorm_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dorm_id')->unsigned();
            $table->foreign('dorm_id')->references('id')->on('dorms');
            $table->integer('attribute_id')->unsigned();
            $table->foreign('attribute_id')->references('id')->on('attributes');
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
        Schema::dropIfExists('dorm_attributes');
    }
}
