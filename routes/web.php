<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/product', function () { 
    return view('pages.product'); 
}); 
Route::get('/news', function () { 
    return view('pages.news'); 
}); 
Route::get('/contact', function () { 
    return view('pages.contact'); 
});
Route::get('/index', [HomeController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_drashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);

Route::get('/add-category-product',[CategoryProduct::class, 'add_category_product']); 
Route::get('/all-category-product',[CategoryProduct::class, 'all_category_product']);

Route::post('/save-category-product',[CategoryProduct::class, 'save_category_product']);

Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']); 
Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);

Route::get('/add-brand-product',[BrandProduct::class, 'add_brand_product']); 
Route::get('/all-brand-product',[BrandProduct::class, 'all_brand_product']); 
Route::post('/save-brand-product',[BrandProduct::class, 'save_brand_product']); 
Route::get('/unactive-brand-product/{brand_product_id}',[BrandProduct::class, 'unactive_brand_product']); 
Route::get('/active-brand-product/{brand_product_id}',[BrandProduct::class, 'active_brand_product']);

Route::get('/edit-brand-product/{brand_product_id}',[BrandProduct::class, 'edit_brand_product']);
Route::post('/update-brand-product/{brand_product_id}', [BrandProduct::class, 'update_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}',[BrandProduct::class, 'delete_brand_product']);
