<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;

class UserTest extends TestCase
{
  use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store()
    {
      Role::factory()->create();
      Role::create(['id'=>2,'type'=>'common_user']);
      $regis_correct = $this->post('api/register', [
         'username'=>'primera',
         'password'=>'esuna123',
         'confirm_password'=>'esuna123',
         'first_name'=>'juan',
         'second_name'=>'david',
         'first_surname'=>'rodriguez',
         'second_surname'=>'mendez',
         'email'=>'123@primera.com'
      ]);
      
      $failed_match = $this->post('api/register', [
         'username'=>'segunda',
         'password'=>'esuna123',
         'confirm_password'=>'esuna12',
         'first_name'=>'juan',
         'second_name'=>'david',
         'first_surname'=>'rodriguez',
         'second_surname'=>'mendez',
         'email'=>'123@segunda.com'
      ]);
      
      $incomplete = $this->post('api/register', [
         'username'=>'tercera',
         'password'=>'esuna123',
         'confirm_password'=>'esuna123',
         'first_name'=>'',
         'second_name'=>'david',
         'first_surname'=>'rodriguez',
         'second_surname'=>'mendez',
         'email'=>'123@tercera.com'
      ]);
      $duplicated = $this->post('api/register', [
         'username'=>'primera',
         'password'=>'esuna123',
         'confirm_password'=>'esuna123',
         'first_name'=>'juan',
         'second_name'=>'david',
         'first_surname'=>'rodriguez',
         'second_surname'=>'mendez',
         'email'=>'123@primera.com'
                                ]);
      $regis_correct->assertStatus(200);
      $failed_match->assertStatus(400);
      $incomplete->assertStatus(400);
      $duplicated->assertStatus(421);
    }
}
