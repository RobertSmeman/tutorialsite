<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table) {    // maakt de posts tabel.
            $table->increments('id');   // id is een increment??? is dat voor getallen???
            $table->integer('category_id')->unsigned();   // category_id is een integer, dus het kan alleen een getal zijn.
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');    // ????????
            $table->string('title');    // title is een sring dus stuk tekst met alle tekens mogelijk.
            $table->text('content');    // content is een stuk tekst.
            $table->string('upload');   // upload is een string en nu weet ik niet meer wat dat is ???????
            $table->text('snippet');    // snippet is een stuk tekst. is dat wel goed??
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
        Schema::drop('posts');    // erwijderd de posts tabel.
    }
}
