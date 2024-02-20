<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'razon_social',
        'ruc',
        'nombre_comercial'
    ];

    public function areas()
    {
        return $this->hasMany(Area::class, 'empresa_id');
    }
}
