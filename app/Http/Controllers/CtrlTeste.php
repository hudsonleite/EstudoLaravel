<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postagem;
use App\Http\Requests;

class CtrlTeste extends Controller
{
    //
    public function index()
    {
    	# code...
    	return "Pagina Teste 02";
    }

    public function home()
    {
        # code...
        return "Pagina Inicial 33333";
    }

    //realizando chamada de uma view
    public function msg($value)
    {
    	# code...
    	return view('pgmsg.index');
    }
    public function msggeral($value)
    {
        # code...
        return view('pgmsg.pgmsg_geral',['mensagem'=>$value]);
    }

    //realizando chamada de uma view com parametro
    public function msg1($value)
    {
        # code...
        return view('pghome.index', ['mensagem'=>$value]);
    }
    public function mostra_dados_pessoa()
    {
        return view('pghome.pg_info_pessoa');
    }
    public function mostra_dados_func()
    {
        # code...
        return view('pghome.pg_info_func');
    }

    public function mostra_anotacao(){
        #code
        $notas_r = [
            0 => "A gratidão é a memória do coração.",
            1 => "Falo nada, só observo.",
            2 => "Deixe pra trás o que não te leva pra frente.",
            3 => "O segredo é ter fé em Deus.",
            4 => "Não importa o que você decidiu. O que importa é que isso te faça feliz.",
        ];

        return view('pghome.pg_anotacao', compact('notas_r'));
    }

    public function postagem(){
        $postagem = \App\Postagem::all();

        return view('pghome.pg_postagem',compact('postagem'));
    }
}
