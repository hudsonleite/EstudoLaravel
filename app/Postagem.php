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
}
