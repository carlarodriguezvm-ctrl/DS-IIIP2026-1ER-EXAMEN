<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Material;

class Proveedor extends Model
{
    protected $table = 'proveedors';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
    ];
    public function materiales()
    {
        return $this->hasMany(Material::class);
    }
}
