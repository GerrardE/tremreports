<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCg12sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cg12s', function (Blueprint $table) {
           $table->increments('id');
			$table->integer('user_id');
			 $table->text('country');
			 $table->text('city');
			 $table->text('address');
			  $table->text('state');
			 $table->text('name');
			 $table->integer('branch');
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
        Schema::dropIfExists('cg12s');
    }
}
