<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class EquipoController extends Controller
{
    public function index(): JsonResponse
    {
        $equipos = Equipo::all();
        return response()->json($equipos);
    }

    public function validarEquipos(Request $request): JsonResponse
    {
        $request->validate([
            'codigos' => 'required|array',
            'codigos.*' => 'string'
        ]);

        $codigosInput = $request->input('codigos');
        $equiposEncontrados = Equipo::whereIn('codigo', $codigosInput)
                                   ->pluck('codigo')
                                   ->toArray();

        $codigosNoEncontrados = array_diff($codigosInput, $equiposEncontrados);

        return response()->json([
            'encontrados' => $equiposEncontrados,
            'no_encontrados' => array_values($codigosNoEncontrados)
        ]);
    }
}