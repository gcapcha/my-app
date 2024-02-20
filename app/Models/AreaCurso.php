<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaCurso extends Model
{
    use HasFactory;
    protected $table = 'area_curso';

    protected $fillable = [
        'curso_id',
        'area_id'
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
