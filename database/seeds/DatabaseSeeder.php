<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   // php artisan db:seed om de seeder in de database te zetten.
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([    // dit word in de user tabel gezet.
            'name' => 'Admin',
            'surname' => 'Admin',
            'email' => 'admin@admin.nl',
            'password' => bcrypt('Admin'),
        ]);
    }
}
