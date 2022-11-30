<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class apiController extends Controller
{
    //
  /*public function users(Request $request)
  {
    if($request->has('active'))
    {
      $users = User::where('active',true)->get();  
    }else
    {
      $users = User::all();
    }
    return response()->json($users);
  }*/

  public function register(Request $request)
  {
    $request->validate([
      "name" => "required|string",
      "email" => "required|string|unique:users",
      "password" => "required|string|min:6"
    ]);

    $user = new User([
      "name" => $request->name,
      "email" => $request->email,
      "password" => Hash::make($request->password)
    ]);
    $user->save();
    return response()->json(['message' => "Se ha registrado el usuario"],200);
  }

  public function login(Request $request)
  {
   $response = ["status"=>0,"msg"=>"","rol"=>""];
    $data = json_decode($request->getContent());
    $user = User::where('email',$data->email)->first();
    if($user)
    {
      if(Hash::check($data->password, $user->password)){
        $token = $user->createToken("example");
        $response["status"] = 1;
        $response["msg"] = "$token->plainTextToken";
        $response["rol"] = $user->role_id;
      }else
      {
        $response["msg"] = "Error 406...Credenciales incorrectas";
      }
    }else
    {
      $response["msg"] = "Error 405...Usuario no registrado";
    }

    return response()->json($response);
  }
  
}
