<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/coffee-facts-shop', [WebController::class, 'coffeShop'])->name('coffeShop');
Route::get('/sobre-nosotros', [WebController::class, 'sobreNosotros'])->name('sobre-nosotros');
Route::get('/recertario', [WebController::class, 'recertario'])->name('recertario');
Route::get('/blog', [WebController::class, 'blog'])->name('blog');
Route::get('/blog-detalle', [WebController::class, 'blogDetalle'])->name('blog-detalle');
Route::get('/recerta-detalle', [WebController::class, 'recertaDetalle'])->name('recerta-detalle');
Route::get('/contacto', [WebController::class, 'contacto'])->name('contacto');
Route::get('/producto', [WebController::class, 'producto'])->name('producto');
