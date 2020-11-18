<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::with('category')->get()->toJson(JSON_PRETTY_PRINT);

        return response($products, 200);
    }

    public function getProduct($id) {
        if(Product::where('id', $id)->exists()) {
            $product = Product::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);

            return response($product, 200);
        } else {
            return response()->json([
                "message" => "Product not found"
            ], 404);
        };
    }

    public function store(Request $request) {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->isHighlight = $request->isHighlight;
        $product->image_url = $request->image_url;
        $product->category_id = $request->category_id;

        $product->save();

        return response()->json([
            "message" => "Product record created"
        ], 201);
    }

    public function update(Request $request, $id) {
        if(Product::where('id', $id)->exists()) {
            $product = Product::find($id);

            $product->name = $request->name ?? $product->name;
            $product->description = $request->description ?? $product->description;
            $product->price = $request->price ?? $product->price;
            $product->isHighlight = $request->isHighlight ?? $product->isHighlight;
            $product->image_url = $request->image_url ?? $product->image_url;
            $product->category_id = $request->category_id ?? $product->category_id;

            $product->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Product not found"
            ], 404);
        };
    }

    public function delete($id) {
        if(Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Product not found"
            ], 404);
        }
    }
}
