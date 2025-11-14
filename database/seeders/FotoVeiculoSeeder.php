<?php

namespace Database\Seeders;

use App\Models\FotoVeiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FotoVeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Corolla
        FotoVeiculo::create(['veiculo_id' => 1, 'url' => 'https://images.unsplash.com/photo-1618488666200-1816b71eeb42?auto=format&fit=crop&w=800&q=80', 'ordem' => 1]);
        FotoVeiculo::create(['veiculo_id' => 1, 'url' => 'https://images.unsplash.com/photo-1597009889214-ff061b18685b?auto=format&fit=crop&w=800&q=80', 'ordem' => 2]);
        FotoVeiculo::create(['veiculo_id' => 1, 'url' => 'https://images.unsplash.com/photo-1629141690991-9e92b0c1c234?auto=format&fit=crop&w=800&q=80', 'ordem' => 3]);

        // Civic
        FotoVeiculo::create(['veiculo_id' => 2, 'url' => 'https://images.unsplash.com/photo-1608112599043-0bc8df05c1f5?auto=format&fit=crop&w=800&q=80', 'ordem' => 1]);
        FotoVeiculo::create(['veiculo_id' => 2, 'url' => 'https://images.unsplash.com/photo-1600267176224-dc61a0c33d6a?auto=format&fit=crop&w=800&q=80', 'ordem' => 2]);
        FotoVeiculo::create(['veiculo_id' => 2, 'url' => 'https://images.unsplash.com/photo-1620304250953-430234bdb1db?auto=format&fit=crop&w=800&q=80', 'ordem' => 3]);
    }
}
