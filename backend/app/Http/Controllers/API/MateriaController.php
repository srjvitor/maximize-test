<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Materia;
use Illuminate\Support\Str;

use function Laravel\Prompts\select;

class MateriaController extends Controller
{
    /**
     * Busca todas as materias
     */
    public function findAll()
    {
        $result = Materia::orderBy('data_de_publicacao', 'desc')->select([
            'id',
            'titulo',
            Materia::raw("LEFT(descricao, 60) as descricao"),
            'imagem',
            'data_de_publicacao',
        ])->paginate(5);

        return $result;
    }

    /**
     * Busca dados especificos de uma materia
     */
    public function getOne($id)
    {
        $result = Materia::where('id', $id)
            ->select([
                'titulo',
                'descricao',
                'texto_completo',
                'imagem',
                'data_de_publicacao',
            ])->first();

        return $result;
    }
}
