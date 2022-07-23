<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registrar::create([
            "fecha" =>"2022-07-04",
            "montoTotal" =>"68.50",
            "detaller_id" =>"Pantalon",
            
        ]);

        Registrar::create([
            "fecha" =>"2022-06-15",
            "montoTotal" =>"50.45",
            "detaller_id" =>"Blusa",
            
        ]);

        Registrar::create([
            "fecha" =>"2022-04-08",
            "montoTotal" =>"80.90",
            "detaller_id" =>"Polera",
            
        ]);

        
    }
}
