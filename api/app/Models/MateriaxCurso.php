<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriaxCurso extends Model
{
    //
    protected $table = 'materiasxcursos';
    protected $fillable = ['cod_curso', 'cod_materia'];
	public  $timestamps = false;
	
}
