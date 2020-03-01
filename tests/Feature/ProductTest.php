<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Product;

class ProductTest extends TestCase
{
  use RefreshDatabase;
  /**
   * A basic feature test example.
   *
   * @return void
   */
  public function testPostProduct()
  {
    // $this->markTestSkipped(
    //   'Prueba unitaria en pausa'
    // );
    $product = factory(Product::class)->make();
    $response = $this->json('POST','/api/product',[
      'codproduct' => $product->codproduct,
      'name' => $product->name,
      'description' => $product->description
    ]);
    $response
      ->assertStatus(201)
      ->assertJsonStructure([
        'codproduct','name','description'
      ]);
    $this
      ->assertDatabaseHas('products',[
        'codproduct' => $product->codproduct,
        'name' => $product->name,
        'description' => $product->description
      ]);
  }
}
