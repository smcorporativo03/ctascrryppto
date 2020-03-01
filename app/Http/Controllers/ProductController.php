<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
  public function store(Request $request){
    // Searching for an existing object : $[ClassName] = [ClassName]::find($request->id); 
    // Updating an existing object : $[ClassName]->update();
    $product = new Product();
    $product->codproduct  = $request->codproduct;
    $product->name        = $request->name;
    $product->description = $request->description;
    $product->save();

    return response()->json($product,201);
  }
}
