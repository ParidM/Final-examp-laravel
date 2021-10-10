<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\Form_PengeluaranController;
use App\Http\Controllers\OrderlistController;
use App\Http\Controllers\ProductsControler;
use App\Http\Controllers\OrderingController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/master', function () {
    return view('layouts/master');
});
Route::get('/order', function () {
    return view('ordering.order');
});
Route::get('/cart', function () {
    return view('ordering.cart');
});
Route::get('/products', function () {
    return view('ordering.products');
});
Route::get('/checkout', function () {
    return view('ordering.checkout');
});
Route::get('/product_single', function () {
    return view('ordering.product_single');
});
// Route::get('/awal', function () {
//     return view('ordering.barang');
// });

//Ordering
Route::get('/ordering',[OrderingController::class, 'ordering'])->name('ordering');
Route::get('/login',[OrderingController::class, 'login'])->name('login-ordering');
Route::get('/sigin',[OrderingController::class, 'sigin'])->name('sigin');
Route::get('/barang',[ProductsControler::class, 'barang'])->name('barang');
Route::get('/show_products',[ProductsControler::class,'show'])->name('show_products');
Route::get('/add-cart/{id}/{qty}', [CartController::class, 'AddCart'])->name('add_cart');
Route::get('/list-cart', [CartController::class, 'ListCart'])->name('list_cart');
Route::get('/jumlah', [CartController::class, 'jumlah'])->name('jumlah');


//Reporting

Route::get('/',[AuthController::class, 'login'])->name('login');
Route::post('/proses_login',[AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');
Route::post('/CreateAkun',[AdminController::class, 'CreateAkun'])->name('CreateAkun');
Route::get('/EditAkun/{id}',[OwnerController::class, 'EditAkun'])->name('EditAkun');
Route::post('/UpdateAkun/{id}',[OwnerController::class, 'UpdateAkun'])->name('UpdateAkun');
Route::get('/DeleteAkun/{id}',[OwnerController::class, 'DeleteAkun'])->name('DeleteAkun');
Route::get('/tbl_pemasukan',[PemasukanController::class,'index'])->name('tbl_pemasukan');
Route::post('/search',[PemasukanController::class,'search'])->name('search');
Route::get('/tbl_pengeluaran',[PengeluaranController::class,'index'])->name('tbl_pengeluaran');
Route::get('/Form_pengeluaran',[Form_PengeluaranController::class,'index'])->name('Form_pengeluaran');
Route::post('/Create_Pengeluaran',[Form_PengeluaranController::class,'create'])->name('Create_Pengeluaran');
Route::get('/Orderlist',[OrderlistController::class,'index'])->name('Orderlist');
Route::get('/chart',[PemasukanController::class,'chart'])->name('chart');
Route::get('/chartpengeluaran',[PengeluaranController::class,'chartpengeluaran'])->name('chartpengeluaran');





//membatasi akses dengan miiddelware
// Route::group(['middleware' => ['auth','Verify_login:owner']], function(){
//     Route::get('/home',[HomeController::class, 'homepage'])->name('home');


//auth->admin || owner

 Route::group(['middleware' =>['auth']], function (){
  Route::group(['middleware' => ['Verify_login:admin']], function(){
     Route::get('admin',[AdminController::class, 'index'])->name('admin');
     Route::get('/home',[HomeController::class, 'homepage'])->name('home');
     Route::get('/tbl_pemasukan',[PemasukanController::class,'index'])->name('tbl_pemasukan');
  });
     Route::group(['middleware' => ['Verify_login:owner']], function(){
         Route::get('owner',[OwnerController::class, 'index'])->name('owner');
         Route::get('/home',[HomeController::class, 'homepage'])->name('home');
         Route::get('/listadmin',[OwnerController::class, 'listadmin'])->name('listadmin');
         Route::get('/register',[OwnerController::class, 'register'])->name('register');
        
   });
 });
