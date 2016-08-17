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
    	Return "Pagina Teste 02";
    }

    public function home()
    {
    	# code...
    	Return "Pagina Inicial";
    }

    public function msg($value)
    {
    	# code...
    	Return view('pgmsg/index');
    }
}
