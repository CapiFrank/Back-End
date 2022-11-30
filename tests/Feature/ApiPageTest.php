<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Page;

class ApiPageTest extends TestCase
{
  use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ShowPage()
    {
       $page = Page::create([     
      'title'=>'PaginaPrueba',
      'subtitle'=>'subtitulo de la pagina',
      'content'=>'Esta es la descripcion de la pagina de prueba'           
        ]);
        $response = $this->get('api/Page');

        $response->assertStatus(200);

     
    }
  
   public function test_CreatePage()
    {
        $response = $this->post('api/Page/save',  [     
      'title'=>'PaginaPrueba',
      'subtitle'=>'subtitulo de la pagina',
      'content'=>'Esta es la descripcion de la pagina de prueba'           
        ]);

        $response->assertStatus(200);
     
    }
}
