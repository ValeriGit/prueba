<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    protected $guarded =  ['id'];

    public function ventas()
    {
        return $this->belongsTo(Venta::class);
    }
}
