<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectionbs', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			 $table->string('month');
			 $table->integer('year');
			 $table->integer('branch');
			 $table->integer('tithers');
			 $table->integer('newmembers');
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
        Schema::dropIfExists('sectionbs');
    }
}
