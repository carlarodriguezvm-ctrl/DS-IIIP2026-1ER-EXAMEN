<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Categoria;
use App\Models\Material;
use App\Models\Pedidodetalle;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'categoria_id',
        'material_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function pedidodetalles()
    {
        return $this->hasMany(Pedidodetalle::class);
    }
}
