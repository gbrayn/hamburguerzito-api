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
Route::get('/produtos', [ViewController::class, 'dashboardProducts'])->name('index');
Route::get('/produtos/deletar/{id}', [ViewController::class, 'deleteProduct']);
Route::get('/produtos/novo', [ViewController::class, 'showCreateForm']);
Route::post('/produtos/novo', [ViewController::class, 'createProduct']);

