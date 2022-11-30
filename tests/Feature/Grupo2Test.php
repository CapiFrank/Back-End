<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;
use App\Models\Task;

class Grupo2Test extends TestCase
{
  use RefreshDatabase; 
    /**
     * A basic feature test example.
     *
     * @return void
     */
  
  public function test_update()
  {
    $rol = Role::create([
      'id'=>1,
      'type'=>'common_user'                
    ]); 
    
   $usuario = User::create([ 
      'id'=>2,
      'username'=>'asdasasdd',
      'password'=>'asdasdad',
      'first_name'=>'Jose',
      'second_name'=>'Alberto',
      'first_surname'=>'Guevara',
      'second_surname'=>'Morales',                   
      'email'=>'catego@gmail.com',
      'email_verified_at'=>null, 
      'role_id'=>1,
      'first_time'=>1                    
    ]); 
      $data = [
      'username'=>'asdasddasd',
      'first_name'=>'tdtttf',
      'second_name'=>'tftft',
      'first_surname'=>'tftftf',
      'second_surname'=>'tftfftft',         
      'email'=>'categtftftfo@gmail.com'
      ];    
    
      $update_correct = $this->put('api/users/update/2',$data);

     $update_correct->assertStatus(500);        
    }
  
}
