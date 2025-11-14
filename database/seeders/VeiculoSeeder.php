<?php

namespace Database\Seeders;
use App\Models\Veiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Veiculo::create([
            'marca_id' => 1,
            'modelo_id' => 1,
            'cor_id' => 3,
            'ano' => 2020,
            'quilometragem' => 45000,
            'valor' => 110000,
            'detalhes' => 'Sedan confortável e econômico, ótimo estado.',
            'foto_principal' => 'https://cdn.motor1.com/images/mgl/MVVrK/s1/toyota-corolla-2020.jpg',
        ]);

        Veiculo::create([
            'marca_id' => 2,
            'modelo_id' => 2,
            'cor_id' => 2,
            'ano' => 2019,
            'quilometragem' => 60000,
            'valor' => 98000,
            'detalhes' => 'Honda Civic com manutenção em dia e bancos de couro.',
            'foto_principal' => 'https://cdn.motor1.com/images/mgl/4xKjM/s1/honda-civic-2019.jpg',
        ]);
    }
}
