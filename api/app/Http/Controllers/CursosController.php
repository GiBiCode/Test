<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Materia;
use App\Models\MateriaxCurso;

class CursosController extends Controller
{
    //
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct(){
    //     $this->beforeFilter('auth', array('except' => 'getLogin'));      
    // }

    
    public function index()
    {
         //return view('cursos');
         $cursos = Curso::all();         
         return response()->json($cursos->toArray());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $materias = Materia::all();
         $matxcur = MateriaxCurso::all();
         $cursos = new Curso($request->all());
         $cursos->save();
         //$cursos->materias()->attach('Aquí id task',['cod_materia'=>'id materia']);
         return response()->json(["mensaje" => "Registro creado correctamente"]);
     


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  
        $cursos = Curso::find($id);
        
        if(!isset($cursos)){
            return Response::make('RECORD_DOES_NOT_EXISTS', 500);
        }

        $cursos->fill($request->all());
        $cursos->save();
        return response()->json(["mensaje"=>"Registro Actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cursos = Curso::find($id);
        $cursos->delete();
        return response()->json(["mensaje"=>"Registro Borrado"]);
    }
}
