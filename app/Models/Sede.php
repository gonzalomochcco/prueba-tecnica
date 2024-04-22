<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_empresa',
        'nombre',
        'direccion',        
        'created_at',
        'updated_at'
    ];


    


}
