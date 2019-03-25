<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDormApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_dorm_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('dorm_id')->unsigned();
            $table->foreign('dorm_id')->references('id')->on('dorms');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('users');
            $table->tinyInteger('is_verified');
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
        Schema::dropIfExists('user_dorm_applications');
    }
}
