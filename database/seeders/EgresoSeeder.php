<?php

namespace Database\Seeders;

use App\Models\Ingreso;
use Illuminate\Database\Seeder;

class EgresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingreso = new Ingreso();
        $ingreso->valor_ingreso = 13.123;
        $ingreso->user_id = 1;
        $ingreso->save();

        $ingreso = new Ingreso();
        $ingreso->valor_ingreso = 134.123;
        $ingreso->user_id = 1;
        $ingreso->save();

        $ingreso = new Ingreso();
        $ingreso->valor_ingreso = 6134.123;
        $ingreso->user_id = 1;
        $ingreso->save();

        $ingreso = new Ingreso();
        $ingreso->valor_ingreso = 433.123;
        $ingreso->user_id = 2;
        $ingreso->save();

        $ingreso = new Ingreso();
        $ingreso->valor_ingreso = 4773.123;
        $ingreso->user_id = 3;
        $ingreso->save();

        $ingreso = new Ingreso();
        $ingreso->valor_ingreso = 4353.123;
        $ingreso->user_id = 3;
        $ingreso->save();
    }
}
