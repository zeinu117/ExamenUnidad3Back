<?php

namespace Database\Seeders;
use App\Models\DatosPersonales;
use Illuminate\Database\Seeder;

class DatosPersonalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DatosPersonales::factory(30)->create();
    }
}
