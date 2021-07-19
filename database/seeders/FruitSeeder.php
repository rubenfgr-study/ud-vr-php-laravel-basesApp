<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('frutas')->insert(array(
                'nombre' => 'Fruta ' . $i,
                'descripcion' => 'Descripción de la fruta ' . $i,
                'precio' => $i,
                'fecha' => now()
            ));

            $this->command->info('La tabla de frutas a sido rellenada');
        }
    }
}
