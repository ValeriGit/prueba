<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $guarded =  ['id'];

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }

    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Client::class);
    }
}
