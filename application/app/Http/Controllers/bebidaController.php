<?php

namespace MilhoAPP\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use MilhoAPP\Bebida;
use MilhoAPP\Barraca;


class bebidaController extends Controller
{
    public function show(){
        $idBarraca = barraca::select('id')->where('idUser', Auth::id())->first(); 
        $idBarracaString = $idBarraca['id'];
        $listBebidas = Bebida::where('idBarraca', $idBarracaString)->get();

        return view::make('bebidas')->with(compact('listBebidas'));
    }

    public function create(Request $request){
       $dadosCreate = $request->all();
        $cadBebida = new Bebida;
        $cadBebida->nome = $dadosCreate['nomeBebida'];
        $cadBebida->descricao = $dadosCreate['descBebida'];
        $valordabebida = str_replace(',', '.', $dadosCreate['valorBebida']);
        $cadBebida->valor = $valordabebida;
        $idBarraca = barraca::select('id')->where('idUser', Auth::id())->first(); 
        $idBarracaString = $idBarraca['id'];
        $cadBebida->idbarraca = $idBarracaString;
        $cadBebida->save();

        return back();

    }

    public function update(Request $request){
        $dadosBebidas = $request->all();
        $update = Bebida::find($request->codigoBebida);
        $update->nome = $dadosBebidas['nome'];
        $update->descricao = $dadosBebidas['desc'];
        $update->valor =  str_replace(',', '.', $dadosBebidas['valor']);

        $update->save();


        return back();

        // return "Nome: ".$dadosBebidas['nome']."<br>Descrição: ".$dadosBebidas['desc']."<br>Valor: ".$dadosBebidas['valor'];

    }

    public function delete($id){
        $codigo = $id;
        $delete = Bebida::find($codigo);
        $delete->delete();

        return back();
    }
}