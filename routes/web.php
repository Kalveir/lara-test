<?php

use App\Http\Controllers\AksesController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\RakKategoriController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DendaController;
use App\Http\Controllers\SirkulasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/example/dashboard',[ExampleController::class,'example_dashboard'])->name('dashboard');
Route::get('/example/blank',[ExampleController::class,'example_blank']);
Route::get('/example/alert-button',[ExampleController::class, 'alert_button'])->name('example.alert-button');
Route::get('/example/forms',[ExampleController::class, 'forms'])->name('example.forms');
// category CRUD
Route::middleware(['auth', 'can:kelola kategori'])->group(function () {
  Route::get('/example/category',[ExampleController::class, 'category'])->name('example.category');
  Route::post('/example/category/add',[ExampleController::class, 'AddCategory'])->name('category.add');
  Route::put('/example/category/update/{id}',[ExampleController::class, 'UpdateCategory'])->name('category.update');
  Route::delete('/example/category/destroy/{id}',[ExampleController::class, 'DeleteCategory'])->name('category.destroy');
});
// product CRUD
Route::middleware(['auth', 'can:kelola produk'])->group(function () {
  Route::get('/example/product',[ExampleController::class, 'product'])->name('example.product');
  Route::get('/example/product/add',[ExampleController::class, 'AddProduct'])->name('product.add');
  Route::post('/example/product/save',[ExampleController::class,'saveProduct'])->name('product.save');
  Route::get('/example/product/edit/{id}',[ExampleController::class, 'editProduct'])->name('product.edit');
  Route::put('/example/product/update/{id}',[ExampleController::class, 'updateProduct'])->name('product.update');
  Route::delete('/example/product/delete/{id}',[ExampleController::class, 'DeleteProduct'])->name('product.delete');
});






Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/autentikasi',[LoginController::class,'autenticate'])->name('autenticate')->middleware('guest');
Route::middleware(['auth'])->group(function(){
  Route::post('/logout',[LoginController::class,'Logout'])->name('logout');
  Route::get('/home',[LoginController::class,'Home'])->name('home');
  //profil
  Route::post('/profil/{id}',[ProfilController::class,'ProfilInfo'])->name('profile.info');
  Route::put('/profil/update/{id}',[ProfilController::class,'UpdateProfil'])->name('profile.update');
});


Route::middleware(['auth', 'role:Petugas'])->group(function (){
  //jabatan
  Route::get('/jabatan',[JabatanController::class,'index'])->name('jabatan.index');
  Route::get('/jabatan/add',[JabatanController::class,'create'])->name('jabatan.create');
  Route::post('/jabatan/store',[JabatanController::class,'store'])->name('jabatan.store');
  Route::get('/jabatan/edit/{id}',[JabatanController::class,'edit'])->name('jabatan.edit');
  Route::put('/jabatan/update/{id}',[JabatanController::class,'update'])->name('jabatan.update');
  Route::delete('/jabatan/delete/{id}',[JabatanController::class,'destroy'])->name('jabatan.delete');

  // akses
  Route::post('/akses/store',[AksesController::class,'store'])->name('akses.store');
  Route::put('/akses/update/{id}',[AksesController::class,'update'])->name('akses.update');
  Route::delete('/akses/delete/{id}',[AksesController::class,'destroy'])->name('akses.destroy');
  //pengguna
  Route::get('/user',[UserController::class,'index'])->name('user.index');
  Route::get('/user/add',[UserController::class,'create'])->name('user.create');
  Route::post('/user/store',[UserController::class,'store'])->name('user.store');
  Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
  Route::put('/user/update/{id}',[UserController::class,'update'])->name('user.update');
  Route::delete('/user/delete/{id}',[UserController::class,'destroy'])->name('user.delete');
});

Route::middleware(['auth', 'role:Pengunjung'])->group(function () {
  //nama route
});