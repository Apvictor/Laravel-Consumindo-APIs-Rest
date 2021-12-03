<?php

namespace App\Http\Controllers;

use App\Repositories\CursoRepository;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function list(CursoRepository $cursoRepository)
    {
        $cursos = $cursoRepository->list();
    }

    public function show(CursoRepository $cursoRepository)
    {
        $cursos = $cursoRepository->show('1');
    }

    public function create(CursoRepository $cursoRepository)
    {
        $resposta = $cursoRepository->create([
            'nome' => 'PHP Fundamentos',
            'linguagem' => 'PHP'
        ]);

        if ($resposta) {
            return 'criado com sucesso';
        }

        return 'Erro ao criar';
    }

    public function update(CursoRepository $cursoRepository)
    {
        $resposta = $cursoRepository->update('1', [
            'nome' => 'PHP OO',
            'linguagem' => 'PHP'
        ]);

        if ($resposta) {
            return 'Atualizado com sucesso';
        }

        return 'Erro ao Atualizar';
    }

    public function delete(CursoRepository $cursoRepository)
    {
        $resposta = $cursoRepository->delete('1');

        if ($resposta) {
            return 'Deletado com sucesso';
        }

        return 'Erro ao Deletar';
    }
}
