<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosPost extends Model
{
    //
    protected $fillable = [
		'id_post',
		'name',
		'email',
		'comentario'
    ];

    public function post()
    {
    	# code...
    	return $this->belongsTo('App\Postagem','id_post','id');
    }
}
