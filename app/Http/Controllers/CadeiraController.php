<?php

namespace App\Http\Controllers;

use App\Models\Cadeira;
use Illuminate\Http\Request;

class CadeiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cadeiras.index',['cadeira'=>Cadeira::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cadeira  $cadeira
     * @return \Illuminate\Http\Response
     */
    public function show(Cadeira $cadeira)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cadeira  $cadeira
     * @return \Illuminate\Http\Response
     */
    public function edit(Cadeira $cadeira)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cadeira  $cadeira
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadeira $cadeira)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cadeira  $cadeira
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cadeira $cadeira)
    {
        //
    }
}
