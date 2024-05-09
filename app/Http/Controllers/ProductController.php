<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Exception;
use FTP\Connection;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch products from the database
        $products = Product::all();
        return response()->json([
            "message" => "Successfully",
            "data" => $products
        ], 200);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'cost' => 'required',
            'qty' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->qty = $request->qty;
        $product->cost = $request->cost;
        $product->isDeleted = false;
        $product->createdAt = now();
        $product->category_id = $request->category_id;

        $product->save();

        return response()->json([
            "message" => "Product record created",
            "data" => [
                'id' => $product->id,
                'name' => $product->name,
            ]
        ], 201);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json([
            "message" => "Product record found",
            "data" => $product
        ], 200);
    }
     
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request;
        $product->save();
        return response()->json([
            "message" => "Product record updated"
        ], 200);
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/');
    }

    public function getProductsByCategory($category_id)
    {
        if($category_id=="all"){
            $products = Product::all();
            return response()->json([
                "message" => "Product records found",
                "data" => $products
            ], 200);
        }
        $products = Product::where('category_id', $category_id)->get();
        return response()->json([
            "message" => "Product records found",
            "data" => $products
        ], 200);
    }
}

