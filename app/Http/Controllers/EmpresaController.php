<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function create(Request $request)
    {
        $parameters = $request->all();

        $empresa = Empresa::create([
            'razon_social' => $parameters['rz_social'],
            'ruc' => $parameters['ruc'],
            'nombre_comercial' => $parameters['nombre_comercial']
        ]);

        return $empresa;
    }

    public function read()
    {
        $empresas = Empresa::with('areas')->get();

        return $empresas;
    }

    public function readOne($id)
    {
        $empresa = Empresa::find($id);

        return $empresa;
    }

    public function update(Request $request)
    {
        $parameters = $request->all();
        $ternario = isset($parameters['nombre_comercial']) ? $parameters['nombre_comercial'] : 'No existe';
        $empresas = Empresa::where('id', '<', 2)->update([
            'razon_social' => $parameters['rz_social'],
            'ruc' => $parameters['ruc'],
            'nombre_comercial' => $ternario
        ]);
    }

    public function updateOne($id, Request $request)
    {
        $parameters = $request->all();
        $ternario = isset($parameters['nombre_comercial']) ? $parameters['nombre_comercial'] : 'No existe';
        
        $empresas = Empresa::find($id)->update([
            'razon_social' => $parameters['rz_social'],
            'ruc' => $parameters['ruc'],
            'nombre_comercial' => $ternario
        ]);
    }

    public function delete($id)
    {
        $empresa = Empresa::find($id)->delete();
        return $empresa;
    }
}
