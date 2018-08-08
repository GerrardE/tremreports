<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateG12sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g12s', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			 $table->string('month');
			 $table->integer('year');
			  $table->integer('branch');
			 $table->integer('week');
			 $table->integer('attendance');
			
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
        Schema::dropIfExists('g12s');
    }
}
