<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dorms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('landlord_id')->unsigned();
            $table->foreign('landlord_id')->references('id')->on('users');
            $table->tinyInteger('status')->default(0);
            $table->string('name');
            $table->enum('genders', ['Male','Female','Mixed',''])->default('Male');
            $table->time('curfew');
            $table->enum('rooms', [1,2,3,'4+'])->default(1);
            $table->string('address');
            $table->string('business_permit');
            $table->string('description');
            $table->decimal('price')->default(0.00);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP()'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP()'));
            $table->double('lat',20,20);
            $table->double('lng',20,20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dorms');
    }
}
