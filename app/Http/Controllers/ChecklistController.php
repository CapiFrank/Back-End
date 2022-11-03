<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


 

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
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $checklist = Checklist::all();
        return response()->json($checklist);
    }

  public function destroy(Request $request, $id)
      {
        $checklist = Checklist::find($id);
        $checklist->delete();
        return response()->json(['message' => "Se ha eliminado el registro", "data" => $checklist ],200);
      }
    

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(Checklist $checklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checklist  $checklist
     * @return \Illuminate\Http\Response
     */
  
    


  
}
