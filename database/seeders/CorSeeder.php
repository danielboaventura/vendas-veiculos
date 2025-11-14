<?php

namespace Database\Seeders;
use App\Models\Cor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cor::create(['nome' => 'Branco', 'hex' => '#FFFFFF']);
        Cor::create(['nome' => 'Preto', 'hex' => '#000000']);
        Cor::create(['nome' => 'Prata', 'hex' => '#C0C0C0']);
        Cor::create(['nome' => 'Vermelho', 'hex' => '#FF0000']);
    }
}
