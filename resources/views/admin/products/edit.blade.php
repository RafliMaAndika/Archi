<x-layout>
    <div class="container mt-10 max-w-xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Edit Produk</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block font-semibold">Nama Produk</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" class="w-full p-3 border rounded">
            </div>

            <div>
                <label for="description" class="block font-semibold">Deskripsi</label>
                <textarea name="description" id="description" rows="4" class="w-full p-3 border rounded">{{ $product->description }}</textarea>
            </div>

            <div>
                <label for="price" class="block font-semibold">Harga</label>
                <input type="number" name="price" id="price" value="{{ $product->price }}" class="w-full p-3 border rounded">
            </div>

            <div>
                <label for="stock" class="block font-semibold">Stok</label>
                <input type="number" name="stock" id="stock" value="{{ $product->stock }}" class="w-full p-3 border rounded">
            </div>

            <div>
                <label for="category_id" class="block font-semibold">Kategori</label>
                <select name="category_id" id="category_id" class="w-full p-3 border rounded">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="is_active" class="block font-semibold">Status</label>
                <select name="is_active" id="is_active" class="w-full p-3 border rounded">
                    <option value="1" {{ $product->is_active ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ !$product->is_active ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>

            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-layout>
