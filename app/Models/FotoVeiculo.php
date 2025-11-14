<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoVeiculo extends Model
{
    use HasFactory;

    protected $table = 'fotos_veiculos';

    protected $fillable = ['veiculo_id', 'url', 'ordem'];

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}
