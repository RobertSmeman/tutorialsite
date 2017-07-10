<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {   // hier word de tabel users gemaakt. met de onderstaande onderdelen
            $table->increments('id');   // id is een increment??? kan alleen een getal zijn?? zo ietes???
            $table->string('name');   // name is string dus een stuk tekst, kan alle tekens zijn.
            $table->string('email')->unique();    // email is ook een string, maar het moet wel unique zijn, dus maar 1 account per email.
            $table->string('password');   // password is ook een string dus een stuk tekst, kan alle tekens zijn. in de user model word dit hidden gemaakt.
            $table->rememberToken();    // het krijgt een token mee. in de user model word dit hidden gemaakt.
            $table->timestamps();   // timestamp is voor de created at en updated at.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');    // hier word de tabel verwijderd.
    }
}
