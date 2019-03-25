<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDormPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dorm_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dorm_id')->unsigned();
            $table->foreign('dorm_id')->references('id')->on('dorms');
            $table->longText('photo');
            $table->enum('photo_type', ['main', 'secondary']);
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
        Schema::dropIfExists('dorm_photos');
    }
}
