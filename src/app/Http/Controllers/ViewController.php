<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ViewController extends Controller
{
    public function index() {
        $products = Product::with('category')->get();
        $categories = Category::get();

        return view('pages/index', ['products' => $products, 'categories' => $categories]);
    }

    public function dashboardProducts() {
        $products = Product::with('category')->get();
        $categories = Category::get();

        return view('pages/dashboardProducts', ['products' => $products, 'categories' => $categories]);
    }

    public function deleteProduct($id) {
        if(Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product->delete();

            return redirect('/produtos');
        } else {
            return redirect('/produtos');
        }
    }

    public function showCreateForm() {
        $categories = Category::get();

        return view('pages/createProduct', ['categories' => $categories]);
    }

    public function createProduct(Request $request) {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->isHighlight = (int)$request->isHighlight;
        $product->image_url = $request->image_url;
        $product->category_id = $request->category_id;

        $product->save();

        return redirect('/produtos');
    }
}
