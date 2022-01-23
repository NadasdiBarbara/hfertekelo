<?php

namespace Database\Seeders;

use App\Models\Beadas;
use Illuminate\Database\Seeder;

class BeadasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beadas::factory(10)->create();
    }
}
