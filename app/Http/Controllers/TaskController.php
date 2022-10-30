<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
    }
    public function show(Request $request)
    {
      if($request->has('101'))
      {
        $task = Task::where('my_day',true)->get();  
      }else if($request->has('102')){
        $task = Task::where('important',true)->get();
      }else if($request->has('103')){
        $task = Task::whereNotNull('final_date')->get();
      }
      else
      {
        $task = Task::all();
      }
    return response()->json($task);
    }
    /**
     * .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function AgregueAMiDia($id)
    {
      $laTarea = Task::find($id);
      if($laTarea -> my_day == false && $laTarea -> important == false && $laTarea -> final_date == null)
      {
      $laTarea -> my_day = true;
      $laTarea -> save();
      return 'Se ha modificado exitosamente';
      }
      return 'No se han realizado cambios';
    }
    public function AgregueAImportante($id)
    {
      $laTarea = Task::find($id);
      if($laTarea -> my_day == false && $laTarea -> important == false && $laTarea -> final_date == null)
      {
      $laTarea -> important = true;
      $laTarea -> save();
      return 'Se ha modificado exitosamente';
      }
      return 'No se han realizado cambios';
    }
    public function AgregueAPlaneado(Request $request)
    {
      $elId = $request -> id;
      $laFecha = $request -> final_date;
      $laTarea = Task::find($elId);  
      if($laTarea -> my_day == false && $laTarea -> important == false && $laTarea -> final_date == null)
      {
      $laTarea -> final_date = $laFecha;
      $laTarea -> save();      
      return 'Se ha modificado exitosamente';
      }
      return 'No se han realizado cambios';
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
