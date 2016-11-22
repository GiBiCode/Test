<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    protected $table = 'materias';
	protected $fillable = ['materia'];
	public  $timestamps = false;
	public function cursos(){
            return $this->belongsTo('\App\cursos', 'materiasxcursos')
            ->withPivot('cod_materia');;
        }
}
