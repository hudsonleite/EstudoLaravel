<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FrasesModelos;
use App\Http\Requests;

class CtrlFrasesModelos extends Controller
{
    //
    public function frasesdiversas()
    {
    	# code...
    	$frasesdiv = \App\FrasesModelos::All();
    	return view('pghome.pg_frasesdiversas', compact('frasesdiv'));
    }
}
