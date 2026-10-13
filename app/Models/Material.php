<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Proveedor;
use App\Models\Producto;

class Material extends Model
{
    protected $table = 'materials';

    protected $fillable = [
        'nombre',
        'code',
        'proveedor_id',
        'stock',
    ];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
