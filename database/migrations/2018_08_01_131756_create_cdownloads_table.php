<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCdownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cdownloads', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->string('month');
			$table->integer('year');
			$table->text('url');
			$table->text('name');
			$table->text('description');
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
        Schema::dropIfExists('cdownloads');
    }
}
