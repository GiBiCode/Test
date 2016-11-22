<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    protected $table = 'cursos';
	protected $fillable = ['curso'];
	public  $timestamps = false;
	public function materias(){
            return $this->belongsTo('\App\materias', 'materiasxcursos')
            ->withPivot('cod_curso');;
        }
}
