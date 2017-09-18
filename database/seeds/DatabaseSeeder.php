<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UsersTableSeeder::class);

    	// This lauch the class in FirstTableSeeder
        $this->call(FirstTableSeeder::class);
    }
}
