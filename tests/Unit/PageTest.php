<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Page;
use Tests\TestCase;

class PageTest extends TestCase
{
  use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
     public function test_create_page()
    {
    $page = Page::create([     
      'title'=>'PaginaPrueba',
      'subtitle'=>'subtitulo de la pagina',
      'content'=>'Esta es la descripcion de la pagina de prueba'           
        ]);
      

    $this->assertEquals('PaginaPrueba',$page->title);
    }
}
