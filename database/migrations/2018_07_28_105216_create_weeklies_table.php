<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeekliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeklies', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			 $table->string('month');
			 $table->integer('year');
			  $table->integer('branch');
			 $table->text('event');
			 $table->integer('women');
			 $table->integer('men');
			 $table->integer('children');
			 $table->text('preacher');
			 $table->integer('total');
			
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
        Schema::dropIfExists('weeklies');
    }
}
