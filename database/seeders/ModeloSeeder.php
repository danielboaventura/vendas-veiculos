<?php

namespace Database\Seeders;
use App\Models\Modelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Modelo::create(['nome' => 'Corolla', 'marca_id' => 1]);
        Modelo::create(['nome' => 'Civic', 'marca_id' => 2]);
        Modelo::create(['nome' => 'Onix', 'marca_id' => 3]);
        Modelo::create(['nome' => 'Gol', 'marca_id' => 4]);
    }
}
