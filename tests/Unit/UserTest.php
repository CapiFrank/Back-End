<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use App\Models\Role;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_store()
    {
      Role::factory()->create();
        $user = new User([
         'username'=>'esunaprueba',
         'password'=>'esuna123',
         'confirm_password'=>'esuna123',
         'first_name'=>'juan',
         'second_name'=>'david',
         'first_surname'=>'rodriguez',
         'second_surname'=>'mendez',
         'email'=>'123@123.com',
         'role_id'=>1,
         'first_time'=>true
      ]);
      
      $this->assertTrue($user->save());
      $this->assertDatabaseHas('users', [
        'email' => '123@123.com',
    ]);
      $this->assertDatabaseHas('roles', [
        'id' => 1,
    ]);
    }
}
