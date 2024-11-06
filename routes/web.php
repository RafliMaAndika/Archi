<?php

use App\Models\Post;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

// Route for Homepage
Route::get('/', function () {
    return view('home', [
        'title'      => 'Homepage',
        'categories' => Category::all(),
        'product'    => Product::with('category')->get(),
        'posts'      => Post::all(),
    ]);
});

Route::prefix('admin')->group(function () {
    Route::get('/products', [ProductController::class, 'adminIndex'])->name('admin.products.index');
    Route::get('/products/category/{slug?}', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'index')->name('admin.products.index'); // Rute untuk menampilkan semua produk
});

Route::prefix('admin')->group(function () {
    Route::get('/posts', [PostController::class, 'adminIndex'])->name('admin.posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
});

// Route for Posts List
Route::controller(PostController::class)->group(function () {
    Route::get('/Posts', 'index')->name('admin.posts.index'); // Rute untuk menampilkan semua produk
});

// Route for Contact Page
Route::get('/Contact', function () {
    return view('Contact', ['title' => 'Contact']);
});

// Route for Company Page
Route::get('/Company', function () {
    return view('Company', ['title' => 'Company']);
});

// Route for Service Page
//Route::get('/Service', function () {
//    return view('Service', ['title' => 'Service']);
//});

// Route for Single Post by Slug
Route::get('/Posts/{post:slug}', function (Post $post) {
    return view('admin.posts.post', [
        'title' => 'Single Post',
        'post'  => $post,
    ]);
});

// Route for Single Product by Slug
Route::get('/Products/{product:slug}', function (Product $product) {
    return view('admin.products.product', [
        'title'   => 'Single Product',
        'product' => $product,
    ]);
});
