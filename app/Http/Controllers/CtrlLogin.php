<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CtrlLogin extends Controller
{
    public function mostra_login()
    {
    	# code...
    	$mensagem = [
    		0 => "Mensagem 01",
    		1 => "Mensagem 02",
    		2 => "Mensagem 03"
    	];
    	return view('pglogin.index', compact('mensagem'));
    }
}
