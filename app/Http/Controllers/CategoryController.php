<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::all();
    //     return view('theme.shop', ['categories' => $categories]);
    // }
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
    
        $result = $categories->map(function ($category) use ($products) {
            $categoryProducts = $products->where('category_id', $category->id);
            if ($categoryProducts->count() > 0) {
                // If category has associated products, return the category without products
                return $category->only(['id', 'name', 'description', 'image', 'createdAt', 'isDeleted']);
            }
        })->filter();

        if ($categories->count() > 0) {
            return response()->json([
                "message" => "Successfully",
                "data" => $result
            ], 200);
        } else {
            return response()->json([
                "message" => "No data found"
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return response()->json([
            "message" => "Category created successfully",
            "data" => $category
        ], 201);
    }

    public function show($id)
    {
        $category = Category::find($id);

        if ($category) {
            return response()->json([
                "message" => "Successfully",
                "data" => $category
            ], 200);
        } else {
            return response()->json([
                "message" => "No data found"
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $category = Category::find($id);

        if ($category) {
            $category->name = $request->name;
            $category->save();

            return response()->json([
                "message" => "Category updated successfully",
                "data" => $category
            ], 200);
        } else {
            return response()->json([
                "message" => "No data found"
            ], 404);
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->delete();

            return response()->json([
                "message" => "Category deleted successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "No data found"
            ], 404);
        }
    }

}

