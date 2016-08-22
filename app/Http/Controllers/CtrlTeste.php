<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
