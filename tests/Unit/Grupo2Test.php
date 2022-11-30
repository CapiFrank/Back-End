<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
  /*  
    Pruebas de César
  */
  use App\Models\User;
  use App\Models\Task;
  use App\Models\Role;

class Grupo2Test extends TestCase
{

  use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */

  public function test_un_rol_puede_tener_usuarios()
  {
    $rol = Role::create([
      'id'=>1,
      'type'=>'common_user'                
    ]);
    
    $usuario = User::create([
      'id'=>20,                  
      'username'=>'asdasd',
      'password'=>'asdasd',
      'first_name'=>'Jose',
      'second_name'=>'Alberto',
      'first_surname'=>'Guevara',
      'second_surname'=>'Morales',                   
      'email'=>'catego@gmail.com',
      'email_verified_at'=>null,
      'role_id'=>1,
      'first_time'=>1                    
    ]);

    $this->assertTrue($rol->id == $usuario->role_id);
  }
  
}
