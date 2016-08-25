<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postagem;
use App\Http\Requests;

class PostsController extends Controller
{
    //
    public function Index()
    {
    	# code...
    	$posts = \App\Postagem::all();
    	return view('pghome.pg_posts', compact('posts'));
    }
}
