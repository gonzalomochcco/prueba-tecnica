<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_empresa',
        'ruc',
        'razon_social',
        'direccion',
        'created_at',
        'updated_at'
    ];

    public function sede()
    {
        return $this->hasMany(Sede::class , "id_empresa" , "id" );
    }

}
