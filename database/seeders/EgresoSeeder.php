<?php

namespace Database\Seeders;

use App\Models\Egreso;
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
        $egreso = new Egreso();
        $egreso->valor = 13.123;
        $egreso->categoria = 'Transporte';
        $egreso->user_id = 1;
        $egreso->save();

        $egreso = new Egreso();
        $egreso->valor = 134.123;
        $egreso->categoria = 'Transporte';
        $egreso->user_id = 1;
        $egreso->save();

        $egreso = new Egreso();
        $egreso->valor = 6134.123;
        $egreso->categoria = 'Transporte';
        $egreso->user_id = 1;
        $egreso->save();

        $egreso = new Egreso();
        $egreso->valor = 433.123;
        $egreso->categoria = 'Transporte';
        $egreso->user_id = 2;
        $egreso->save();

        $egreso = new Egreso();
        $egreso->valor = 4773.123;
        $egreso->categoria = 'Transporte';
        $egreso->user_id = 3;
        $egreso->save();

        $egreso = new Egreso();
        $egreso->valor = 4353.123;
        $egreso->categoria = 'Transporte';
        $egreso->user_id = 3;
        $egreso->save();
    }
}
