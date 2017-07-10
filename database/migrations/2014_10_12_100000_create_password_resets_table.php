<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {   // hier word de password reset tabel gemaakt.
            $table->string('email')->index();   // email is een string dus alle tekens mogelijk. wat is index????
            $table->string('token');    // token is een string dus alle tekens mogelijk.
            $table->timestamp('created_at')->nullable();    // created at timestamp, wat doet nullable????
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');    // verwijderd de tabel.
    }
}
