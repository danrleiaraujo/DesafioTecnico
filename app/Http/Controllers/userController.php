<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\usuario;

class userController extends Controller{

    public function login(Request $request){
        $apelido = $request -> apelido;
        $senha = $request -> senha;
        $usuario = usuario::firstWhere('apelido', "=", $apelido);
        if($usuario && $usuario->senha == $senha)
            return true ;
        return false;
    }
    public function CadastrarNovoUsuario(Request $request){ //Cadastra novo usuario
        $usuario = new usuario();
        $usuario = usuario::create([
            'nome'=>$request-> nome,
            'usuario'=>$request-> usuario,
            'senha'=>$request-> senha,
        ]);
        return $usuario;
    }
}
