<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'empresa_id',
        'age',
        'created_at',
        'updated_at',
    ];
}
