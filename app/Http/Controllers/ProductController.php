<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $products = Product::where('is_featured', '1')->get();
    return view('products.index', compact('products'));
  }

  /**
   * Display the specified resource.
   */
  public function show(Product $product)
  {
    //
  }
}
