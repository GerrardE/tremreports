<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectionas', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->string('month');
			$table->integer('year');
			$table->integer('branch');
			$table->integer('adults');
			$table->integer('children');
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
        Schema::dropIfExists('sectionas');
    }
}
