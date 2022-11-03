<?php

namespace App\Http\Controllers;

use App\Models\ChecklistGroup;
use Illuminate\Http\Request;

class ChecklistGroupController extends Controller
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
     * @param  \App\Models\ChecklistGroup  $checklistGroup
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
    if($request->has('active')){
      $group = ChecklistGroup::where('active',true)->get();  
    }else{
      $group = ChecklistGroup::all();
    }
    return response()->json($group);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChecklistGroup  $checklistGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ChecklistGroup $checklistGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChecklistGroup  $checklistGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $checklistGroup = ChecklistGroup::find($id);
      $checklistGroup->name = $request->name;
      $checklistGroup->save();
      
      return response()->json(['message' => "Se ha actualizado el registro", "data" => $checklistGroup ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChecklistGroup  $checklistGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChecklistGroup $checklistGroup)
    {
        //
    }
}
