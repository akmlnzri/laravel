<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['message'=> 'Success', 'data'=> $products]);  
      }

      public function show($id)
      {
        $product = Product::find($id);
        return response()->json(['message' => 'Success', 'data' => $product]);
      }

      public function store(Request $request)
      {
        $product = Product::create($request->all());
        return response()->json(['message' => 'Successfully store', 'data' => $product ]);
      }

      public function update(Request $request,$id)
      {
          $product = Product::find($id);
          $product->update($request->all());
          return response()->json(['message' => 'Successfully updated', 'data' => $product ]);
      }

      public function destroy($id)
      {
          $product = Product::find($id);
          $product->delete();
          return response()->json(['message' => 'Successfully deleted', 'data' => null]);
      }


}
