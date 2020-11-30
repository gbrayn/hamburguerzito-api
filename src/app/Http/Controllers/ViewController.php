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

            return redirect('/produtos')->with(['success' => 1, 'message' => 'Produto deletado com sucesso.']);
        } else {
            return redirect('/produtos')->with(['success' => 0, 'message' => 'Erro ao deletar o produto.']);
        }
    }

    public function showCreateProductForm() {
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

    public function showUpdateProductForm($id) {
        $product = Product::find($id);
        $categories = Category::get();

        return view('pages/updateProduct', ['product' => $product, 'categories' => $categories]);
    }

    public function updateProduct(Request $request, $id) {
        if(Product::where('id', $id)->exists()) {
            $product = Product::find($id);

            $product->name = $request->name ?? $product->name;
            $product->description = $request->description ?? $product->description;
            $product->price = $request->price ?? $product->price;
            $product->isHighlight = (int)$request->isHighlight ?? $product->isHighlight;
            $product->image_url = $request->image_url ?? $product->image_url;
            $product->category_id = $request->category_id ?? $product->category_id;

            $product->save();

            return redirect('/produtos');
        }
    }

    public function dashboardCategories() {
        $categories = Category::get();

        return view('pages/dashboardCategories', ['categories' => $categories]);
    }

    public function showCreateCategoryForm() {
        return view('pages/createCategory');
    }

    public function createCategory(Request $request) {
        $category = new Category;
        $category->name = $request->name;

        $category->save();

        return redirect('/categorias');
    }

    public function updateCategory(Request $request, $id) {
        if(Category::where('id', $id)->exists()) {
            $category = Category::find($id);

            $category->name = $request->name ?? $category->name;

            $category->save();

            return redirect('/categorias');
        }
    }

    public function deleteCategory($id) {
        if(Category::where('id', $id)->exists()) {
            $category = Category::find($id);
            $products = Product::get();
            $counter = 0;

            foreach ($products as $product) {
                if ($product->category->id !== $category->id) {
                    $counter++;
                }
            }

            if($counter == count($products)) {
                $category->delete();
            }

            return redirect('/categorias');
        } else {
            return redirect('/categorias');
        }
    }

    public function showUpdateCategoryForm($id) {
        $category = Category::find($id);

        return view('pages/updateCategory', ['category' => $category]);
    }

}
