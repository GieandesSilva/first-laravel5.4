<?php

use Illuminate\Database\Seeder;

class FirstTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // It is responsible to create new * seddes First

        factory(App\First::class, 7)->create();
    }
}
