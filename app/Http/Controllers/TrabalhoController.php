<?php

namespace App\Http\Controllers;

use App\Models\Cadeira;
use App\Models\Trabalho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TrabalhoController extends Controller
{

    public function ver(Request $request)
    {
        //montando a consulta
        $trabalhos = DB::table('trabalhos');

        //pegando dados do request
        $cadeira = $request->cadeira;
        $estado = $request->estado;

        //filtro de cadeira
        if ($request->cadeira) {
            $trabalhos->where('cadeira', $cadeira);
        }

        //filtro de estado
        if ($request->estado) {
            $trabalhos->where('estado', $estado);
        }

        //pegando os dados da consulta
        $trabalhos = $trabalhos->get();

        return view('trabalhos.index', compact('trabalhos', 'cadeira', 'estado'), ['cadeiras' => Cadeira::all()]);
    }

    public function create()
    {
        return view('trabalhos.registar', ['cadeira' => Cadeira::all()]);
    }

    public function store()
    {
        Request()->validate([
            'cadeira' => 'required',
            'descricao' => 'required'
        ]);
        Trabalho::create(Request()->all());
        return redirect('/trabalhos/registar');
    }

    public function edit(Trabalho $trabalho)
    {
        return view('trabalhos.editar', compact('trabalho'));
    }

    public function actualizar(Trabalho $trabalho)
    {
        $trabalho->update(Request()->all());
        return redirect('/trabalhos');
    }

    public function eliminar(Trabalho $trabalho)
    {
        $trabalho->delete();
        return redirect('/trabalhos');
    }
}
