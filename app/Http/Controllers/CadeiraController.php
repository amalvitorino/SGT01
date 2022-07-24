<?php

namespace App\Http\Controllers;

use App\Models\Cadeira;
use Illuminate\Http\Request;

class CadeiraController extends Controller
{

    public function index()
    {
        return view('cadeiras.index',['cadeira'=>Cadeira::all()]);
    }

    public function create()
    {
        return view('cadeiras');
    }

    public function store()
    {
        Cadeira::create(Request()->all());
        session()->flash('msg', 'Cadeira criada com sucesso');
        return redirect('/cadeiras');
    }

    public function show(Cadeira $cadeira)
    {
        return redirect('/cadeiras',compact('cadeira'));
    }


    public function edit(Cadeira $cadeira)
    {

        return response()->json([
            'status'=>200,
            'cadeira'=>$cadeira,
        ]) ;
    }

    public function update()
    {
        $cadeira = Cadeira::find(Request()->cadeira_id);
        $cadeira->update(Request()->all());
        session()->flash('msg','categoria actualizada com sucesso');
        return redirect('/cadeiras');
    }

    public function destroy(Cadeira $cadeira)
    {
        $cadeira->delete();
        session()->flash('msg','cadeira eliminada com sucesso');
        return redirect('/cadeiras');
    }
}
