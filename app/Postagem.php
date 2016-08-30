<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    //
    protected $fillable = [
    	'title',
    	'content'
    ];

    public function ComentariosPost()
    {
    	# code...
    	return $this->hasMany('App\ComentariosPost','id_post','id');
    }
}
