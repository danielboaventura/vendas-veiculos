<?php

namespace Database\Seeders;
use App\Models\Database;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $this->call([
            AdminSeeder::class,
            MarcaSeeder::class,
            ModeloSeeder::class,
            CorSeeder::class,
            VeiculoSeeder::class,
            FotoVeiculoSeeder::class,
        ]);
    }
}
