<?php

namespace Tests\Feature;

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
    /**
     * A basic feature test example.
     *
     * @return void
     
    public function test_example()
    {
      
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/

  /*  

    Pruebas de César

  */

  /* 
  public function test_un_usuario_puede_realizar_tareas()
  {

    $usuario = User::make([
      'id'=>11,                  
      'username'=>'Federico',
      'password'=>'Linux1234',
      'first_name'=>'Pedro',
      'second_name'=>'Alberto',
      'first_surname'=>'Morales',
      'second_surname'=>null,                   
      'email'=>'cesar10@gmail.com',
      'email_verified_at'=>null,
      'role_id'=>1,
      'first_time'=>True                    
    ]);

    $tarea = Task::make([
      'id'=>1,                 
      'my_day'=>True,
      'important'=>False,
      'contents'=>'Dolor cum et harum quidem sapiente expedita quod. Pariatur nihil amet',
      'title'=>'Mrs.',
      'final_date'=>null,
      'note_id'=>11,
      'label_id'=>11,
      'checklist_id'=>11,
      'user_id'=>11                               
    ]);

    $this->assertTrue($usuario->id==$tarea->user_id);
  }

  Fallamos

  */

  public function test_un_rol_puede_tener_usuarios()
  {
    $rol = Role::make([
      'id'=>1,
      'type'=>'common_user'                
    ]);

    $usuario = User::make([
      'id'=>1,                  
      'username'=>'asd',
      'password'=>'asd',
      'first_name'=>'Jose',
      'second_name'=>'Alberto',
      'first_surname'=>'Guevara',
      'second_surname'=>'Morales',                   
      'email'=>'5410jos@gmail.com',
      'email_verified_at'=>null,
      'role_id'=>1,
      'first_time'=>1                    
    ]);

    $this->assertTrue($rol->id==$usuario->role_id);
  }
  
}
