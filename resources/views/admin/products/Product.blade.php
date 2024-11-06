<x-Layout>
    <!-- Main Content -->
    <div class="container mx-auto my-8 flex justify-center">
        <div class="w-full max-w-3xl bg-white p-10 shadow-xl rounded-lg relative">

            <!-- Product Image -->
            <div class="mb-8 relative">
                <img src="{{ asset('/storage/'.$products->image) }}"
                     alt="Product" 
                     class="w-full h-72 object-cover rounded-md shadow-md">
                <span class="absolute top-4 right-4 bg-yellow-400 text-gray-900 px-3 py-1 rounded-md text-sm shadow-lg font-semibold">
                    {{ $product->category->name }}
                </span>
            </div>

            <!-- Product Name -->
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">{{ $product->name }}</h1>

            <!-- Product Price -->
            <h2 class="text-2xl font-semibold text-yellow-500 mb-6">
                Rp {{ number_format($product->price, 0, ',', '.') }}
            </h2>

            <!-- Product Description -->
            <div class="mb-6">
                <h3 class="text-lg font-bold text-gray-800 mb-2">Deskripsi:</h3>
                <p class="text-gray-600 leading-relaxed">{{ $product->description }}</p>
            </div>

            <!-- Product Stock & Status -->
            <div class="grid grid-cols-2 gap-6 mb-8">
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-1">Stok:</h3>
                    <p class="{{ $product->stock > 0 ? 'text-gray-800' : 'text-red-600' }}">
                        {{ $product->stock > 0 ? $product->stock . ' item tersedia' : 'Stok habis' }}
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-1">Status:</h3>
                    <p class="{{ $product->is_active ? 'text-green-600' : 'text-red-600' }}">
                        {{ $product->is_active ? 'Aktif' : 'Tidak Aktif' }}
                    </p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-between items-center">
                <a href="/product" 
                   class="inline-block px-6 py-2 bg-gray-200 text-gray-900 rounded-md hover:bg-gray-300 transition font-semibold">
                    Kembali ke Katalog
                </a>
                <a href="https://wa.me/6285703031047"
                   class="inline-block px-6 py-2 bg-yellow-400 text-gray-900 rounded-md hover:bg-yellow-500 transition font-semibold">
                    Buat Penawaran
                </a>
            </div>
        </div>
    </div>
</x-Layout>
