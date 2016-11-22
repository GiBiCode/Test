<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriasController extends Controller
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
         $materias = Materia::all();         
         return response()->json($materias->toArray());
        
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
      
         $materias = new Materia($request->all());
         $materias->save();
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
  
        $materias = Materia::find($id);
        
        if(!isset($materias)){
            return Response::make('RECORD_DOES_NOT_EXISTS', 500);
        }

        $materias->fill($request->all());
        $materias->save();
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
        $materias = Materia::find($id);
        $materias->delete();
        return response()->json(["mensaje"=>"Registro Borrado"]);
    }
}
