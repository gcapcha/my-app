<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function create()
    {
        $persona = Persona::create([
            'name' => 'Pedro',
            'lastname' => 'Alberto',
            'age' => 28
        ]);

        return $persona;
    }

    public function read()
    {
        $personas = Persona::all();

        return $personas;
    }

    public function update()
    {
        $persona = Persona::where('id', '>', 2)->update([
            'name' => 'Brian'
        ]);

        return $persona;
    }

    public function delete()
    {
        $persona = Persona::find(1)->delete();
    }
}
