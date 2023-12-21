<?php

namespace Database\Seeders;

use App\Models\Incidencia;//clase para usar la incidecia ; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Incidencia::factory()
        ->count(50)//crea 50 objetos de tipo Incidecia::factory()
        ->create();
    }
}
