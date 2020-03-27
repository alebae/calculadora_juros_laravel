<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simulacao;

class SimulacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Simulacao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        if(!validateJson($request->all())){
            return response()->json(['erro' => 'Erro! Você não preencheu os campos corretamente!'], 500);
        } else {
            Simulacao::create($request->all());
            return response()->json(['msg' => 'Simulação inserida com sucesso!'], 201);
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Simulacao::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $simulacao = Simulacao::findOrFail($id);
        if(!validateJson($request->all())){
            return response()->json(['erro' => 'Erro! Você não preencheu os campos corretamente!'], 500);
        } else {
            $simulacao->update($request->all());
            return response()->json(['msg' => 'Simulação alterada com sucesso!'], 201);
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $simulacao = Simulacao::findOrFail($id);
        $simulacao->delete($simulacao);
    }
}
