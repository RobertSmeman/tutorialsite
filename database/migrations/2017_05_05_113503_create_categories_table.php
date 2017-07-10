<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('categories', function(Blueprint $table) {   // maakt de categories tabel met de onderstaande onderdelen.
          $table->increments('id');   // id is een increment?? is dat alleen voor getallen???
          $table->string('name');   // name is een string dus alle tekens mogelijk.
          $table->timestamps();   // created at en updated at timestamps.
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');   // verwijderd de categories tabel.
    }
}
