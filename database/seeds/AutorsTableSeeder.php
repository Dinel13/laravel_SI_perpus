<?php

use Illuminate\Database\Seeder;

class AutorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (App\Autor::class, 10)->create();
    }
}
