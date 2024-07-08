<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryProduct;
use Illuminate\Support\Facades\Route;

//Front-End
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);

//Back-End
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/admin_dashboard', [AdminController::class, 'dashboard']);

//Category Product
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);

Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);
Route::post('/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);

Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);

Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);

//Brand product
Route::get('/add-brand-product', [BrandController::class, 'add_brand_product']);
Route::get('/all-brand-product', [BrandController::class, 'all_brand_product']);
Route::post('/save-brand-product', [BrandController::class, 'save_brand_product']);

Route::get('/unactive-brand-product/{brand_product_id}', [BrandController::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}', [BrandController::class, 'active_brand_product']);

Route::get('/edit-brand-product/{brand_product_id}', [BrandController::class, 'edit_brand_product']);
Route::post('/update-brand-product/{brand_product_id}', [BrandController::class, 'update_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}', [BrandController::class, 'delete_brand_product']);

//Product
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::post('/save-product', [ProductController::class, 'save_product']);

Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);

Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);

//Kết thúc admin

//Danh mục sản phẩm
Route::get('/danh-muc-san-pham/{category_id}', [CategoryProduct::class, 'show_category_home']);
//Thuong hieu san pham
Route::get('/thuong-hieu-san-pham/{brand_id}', [BrandController::class, 'show_brand_home']);