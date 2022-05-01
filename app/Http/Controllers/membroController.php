<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\membros;

class membroController extends Controller{
    public function CadastrarNovoMembro(Request $request){ //Cadastra novo Membro
        $membros = new membros();
        $membros = membros::create([
            'nome'=>$request-> nome,
            'cargo'=>$request-> cargo,
        ]);
        return $membros;
    }
    public function ListarMembros(){ //Lista membros sem precisar de parametro
        $array = collect([]);
        foreach (membros::all() as $membros)
            $array->push($membros);
        return($array);
    }
    public function procurarMembro(Request $request){ //Procura algum membro pelo nome
        $array = collect([]);
        foreach (membros::all() as $membros)
            if($request->nome == $membros->nome)
                $array->push($membros);

        return($array);
    }
}
