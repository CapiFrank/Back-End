<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();

      return response()->json($users);

      
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
      $validator = Validator::make($request->all(),[
                        'username' => 'required|min:5|max:20',
                        'password' => 'required|min:8|max:16',
                        'confirm_password' => 'required|same:password',
                        'first_name' => 'required|min:3|max:25',
                        'second_name' => 'required|min:3|max:25',
                        'first_surname' => 'required|min:3|max:25',
                        'second_surname' => 'required|min:3|max:25',
                        'email' => 'required|email|unique:users'
      ]);
      if($validator->fails()){
        return response()->json(['message'=>'Validations fails',
                                'errors'=>$validator->errors()
                                ],400);
      }
      $user = User::create([
                  'username' => $request -> username,
                  'password' => Hash::make($request->password),
                  'first_name' => $request -> first_name,
                  'second_name' => $request -> second_name,
                  'first_surname' => $request -> first_surname,
                  'second_surname' => $request -> second_surname,
                  'email' => $request -> email,
                  'role_id' => 1,
                  'first_time' => true
      ]);
      return response()->json(['message'=>'Registration successfull',
                              'data'=> $user],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if($request->has('active'))
    {
      $users = User::where('active',true)->get();  
    }else
    {
      $users = User::all();
    }
    return response()->json($users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
         $users = User::find($id);
      return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       $users = User::find($id);

      $users->username = $request->username;
      $users->first_name = $request->second_name;
      $users->second_name = $request->second_name;
      $users->first_surname = $request->first_surname;
      $users->second_surname = $request->second_surname;
      $users->email = $request->email;
      $users->update();
      $users->save();

      
      return response()->json(['message' => "Se ha actualizado el usuario", "data" => $users ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
