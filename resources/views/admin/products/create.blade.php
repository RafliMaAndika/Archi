<x-layout>
    <div class="container mt-10 max-w-xl mx-auto bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6">Tambah Produk</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-600 p-4 rounded-md mb-6">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Nama Produk -->
            <div>
                <label for="name" class="block font-semibold text-gray-700">Nama Produk</label>
                <input 
                    type="text" 
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400" 
                    id="name" 
                    name="name" 
                    value="{{ old('name') }}" 
                    required 
                    placeholder="Masukkan nama produk">
            </div>

            <!-- Deskripsi -->
            <div>
                <label for="description" class="block font-semibold text-gray-700">Deskripsi</label>
                <textarea 
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400" 
                    id="description" 
                    name="description" 
                    rows="3" 
                    required 
                    placeholder="Deskripsikan produk">{{ old('description') }}</textarea>
            </div>

            <!-- Harga -->
            <div>
                <label for="price" class="block font-semibold text-gray-700">Harga</label>
                <input 
                    type="number" 
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400" 
                    id="price" 
                    name="price" 
                    value="{{ old('price') }}" 
                    required 
                    placeholder="Masukkan harga produk">
            </div>

            <!-- Stok -->
            <div>
                <label for="stock" class="block font-semibold text-gray-700">Stok</label>
                <input 
                    type="number" 
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400" 
                    id="stock" 
                    name="stock" 
                    value="{{ old('stock') }}" 
                    required 
                    placeholder="Masukkan jumlah stok">
            </div>

            <!-- Kategori -->
            <div>
                <label for="category_id" class="block font-semibold text-gray-700">Kategori</label>
                <select 
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400" 
                    id="category_id" 
                    name="category_id" 
                    required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Upload Gambar -->
            <div>
                <label for="image" class="block font-semibold text-gray-700">Upload Gambar</label>
                <input 
                    type="file" 
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400" 
                    id="image" 
                    name="image" 
                    required>
            </div>

            <!-- Status Aktif -->
            <div>
                <label for="is_active" class="block font-semibold text-gray-700">Status Aktif</label>
                <select 
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring-yellow-400 focus:border-yellow-400" 
                    id="is_active" 
                    name="is_active" 
                    required>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>

            <!-- Tombol Simpan -->
            <button 
                type="submit" 
                class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 rounded-lg transition-colors">
                Simpan Produk
            </button>
        </form>
    </div>
</x-layout>
