<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($categorySlug = null) {
        $categories = Category::all();
        $query = Product::with('category');
    
        // Jika ada slug kategori, filter produk berdasarkan kategori tersebut
        if ($categorySlug) {
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }
    
        $product = $query->get();
    
        return view('admin.products.Products', compact('categories', 'product'));
    }

    public function show(Product $product) {
        return view('admin.products.product', compact('product'));
    }

public function create() {
    $categories = Category::all(); // Mengambil semua kategori dari database
    return view('admin.products.create', compact('categories'));
}

public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'image'       => 'required|image|mimes:jpeg,jpg,png|max:2048',
        'name'        => 'required|min:5',
        'description' => 'required|min:10',
        'price'       => 'required|numeric',
        'stock'       => 'required|integer',
        'category_id' => 'required|exists:categories,id',
        'is_active'   => 'required|boolean',
    ]);

     // Store the image and get its path
     $imagePath = $request->file('image')->store('images', 'public');    

    // Generate slug
    $slug = Str::slug($request->name);
    $originalSlug = $slug;
    $count = 1;

    // Check for duplicate slugs
    while (Product::where('slug', $slug)->exists()) {
        $slug = $originalSlug . '-' . $count; // Append number to slug
        $count++;
    }

    // Simpan data produk ke database
    Product::create([
        'name'        => $request->name,
        'slug'        => $slug, // Use unique slug
        'description' => $request->description,
        'price'       => $request->price,
        'stock'       => $request->stock,
        'category_id' => $request->category_id,
        'image'       => $imagePath, // Simpan path gambar
        'is_active'   => $request->is_active,
    ]);

    // Redirect dengan pesan sukses
    return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan.');
}

public function adminIndex()
{
    $products = Product::with('category')->get();
    return view('admin.products.index', compact('products'));
}

public function edit(Product $product)
{
    $categories = Category::all();
    return view('admin.products.edit', compact('product', 'categories'));
}

public function update(Request $request, Product $product)
{
    $validatedData = $request->validate([
        'name'        => 'required|min:5',
        'description' => 'required|min:10',
        'price'       => 'required|numeric',
        'stock'       => 'required|integer',
        'category_id' => 'required|exists:categories,id',
        'is_active'   => 'required|boolean',
    ]);

    $product->update($validatedData);
    return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diperbarui.');
}

public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus.');
}

}
