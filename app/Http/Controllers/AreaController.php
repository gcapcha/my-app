<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function read()
    {
        $areas = Area::with(['empresa', 'areaCurso'])->get();

        return $areas;
    }
}
