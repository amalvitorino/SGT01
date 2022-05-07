<?php

namespace App\Http\Controllers;

use App\Models\Cadeira;
use App\Models\Trabalho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TrabalhoController extends Controller
{

    public function ver()
    {
        return view('trabalhos.index', ['trabalho' => Trabalho::all()]);
    }

    public function reg()
    {
        return view('trabalhos.registar',['cadeira' => Cadeira::all()]);
    }

    public function create()
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
        return view('trabalhos.editar', ['trabalho' => $trabalho]);
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
