<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectiondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectionds', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			 $table->string('month');
			 $table->integer('year');
			 $table->integer('branch');
			 $table->integer('cmf');
			 $table->integer('cwf');
			 $table->integer('cyf');
			 $table->integer('rcd');
			
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
        Schema::dropIfExists('sectionds');
    }
}
