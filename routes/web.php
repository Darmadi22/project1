<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    echo "ini merupakan page (page about)";
})->name('tentang');

Route::get('/show/{id?}', function($id) {
    echo "Id : ". $id ;
})->where('id','[0-9]+');

Route::get('/utama', function() {
    echo "Page Utama";
    echo "<br>";
    echo "<a href='".route('tentang')."'>ABOUT</a>";
});

Route::get('/produk',[produkController::class,'index']); 

Route::get('/LatihanView01', function() {
    return view('latihan01');
});

Route::get('/produk/showproduk',[produkController::class, 'showproduk']);