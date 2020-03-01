<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Product;

class ProductsTest extends TestCase
{
  /**
   * A basic feature test example.
   *
   * @return void
   */
  
  use RefreshDatabase;
  
  public function testGetProducts()
  {
    // $this->markTestSkipped(
    //   'Prueba unitaria en pausa'
    // );
    $products = factory(Product::class,5)->create(); /*Crea el elemento dentro de la base de datos.*/
    $response = $this->json('GET','/api/products'); /*Solicita la información a la ruta del api.*/
    // $response = $this->get('/');
    $response
      ->assertStatus(200)
      ->assertJsonStructure(['products'=>[
          '*' => [
            'codproduct','name','description'
          ]
        ]]);  /*Valida la respuesta y la estructura de la misma.*/
    $this->assertCount(5,$response->json('products'));
  }
}
