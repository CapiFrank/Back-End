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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function AgregueAMiDia($id)
    {
      $laTarea = Task::find($id);
      $laTarea -> my_day = true;
      $laTarea -> save();
      return 'Se ha modificado exitosamente';
    }
    public function AgregueAImportante($id)
    {
      $laTarea = Task::find($id);
      $laTarea -> important = true;
      $laTarea -> save();
      return 'Se ha modificado exitosamente';
    }
    public function AgregueAPlaneado(Request $request)
    {
      $elId = $request -> id;
      $laFecha = $request -> final_date;
      $laTarea = Task::find($elId);      
      return $laTarea -> title;
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
