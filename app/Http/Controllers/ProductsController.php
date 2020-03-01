<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function index(){
      // $product = Product::firstOrFail();
      $products = Product::get();
      $result = new class{};
      $result->products =  $products;
      return response()->json($result,200);
    }
}
