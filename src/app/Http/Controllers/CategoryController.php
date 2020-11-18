<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::get()->toJson(JSON_PRETTY_PRINT);

        return response($categories, 200);
    }

    public function getCategory($id) {
        if(Category::where('id', $id)->exists()) {
            $category = Category::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);

            return response($category, 200);
        } else {
            return response()->json([
                "message" => "Category not found"
            ], 404);
        };
    }

    public function store(Request $request) {
        $category = new Category;

        $category->name = $request->name;

        $category->save();

        return response()->json([
            "message" => "Category record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        if(Category::where('id', $id)->exists()) {
            $category = Category::find($id);

            $category->name = $request->name ?? $category->name;

            $category->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Category not found"
            ], 404);
        };
    }

    public function delete($id) {
        if(Category::where('id', $id)->exists()) {
            $category = Category::find($id);
            $category->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Category not found"
            ], 404);
        }
    }
}
