<?php
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ViewController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ViewController::class, 'index']);
Route::get('/produtos', [ViewController::class, 'dashboardProducts']);
Route::get('/produtos/deletar/{id}', [ViewController::class, 'deleteProduct']);
Route::get('/produtos/novo', [ViewController::class, 'showCreateProductForm']);
Route::post('/produtos/novo', [ViewController::class, 'createProduct']);
Route::get('/produtos/alterar/{id}', [ViewController::class, 'showUpdateProductForm']);
Route::post('/produtos/alterar/{id}', [ViewController::class, 'updateProduct']);

Route::get('/categorias', [ViewController::class , 'dashboardCategories']);
Route::get('/categorias/nova', [ViewController::class, 'showCreateCategoryForm']);
Route::post('/categorias/nova', [ViewController::class, 'createCategory']);
Route::get('/categorias/deletar/{id}', [ViewController::class, 'deleteCategory']);
Route::get('/categorias/alterar/{id}', [ViewController::class, 'showUpdateCategoryForm']);
Route::post('/categorias/alterar/{id}', [ViewController::class, 'updateCategory']);
