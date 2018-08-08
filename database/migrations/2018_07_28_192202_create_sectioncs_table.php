<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectioncsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectioncs', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			 $table->string('month');
			 $table->integer('year');
			 $table->integer('branch');
			 $table->integer('councilm');
			 $table->integer('speciala');
			 $table->integer('branchp');
			 $table->text('cspeciala');
			  $table->text('cbranchp');
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
        Schema::dropIfExists('sectioncs');
    }
}
