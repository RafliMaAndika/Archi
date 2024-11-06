<x-layout>
    <div class="container mt-10">
        <h1 class="text-3xl font-bold mb-6">Manajemen Produk</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.products.create') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Produk</a>

        <table class="w-full bg-white shadow-md rounded-lg overflow-hidden mt-4">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left">Nama</th>
                    <th class="p-3 text-left">Kategori</th>
                    <th class="p-3 text-left">Harga</th>
                    <th class="p-3 text-left">Stok</th>
                    <th class="p-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-t">
                        <td class="p-3">{{ $product->name }}</td>
                        <td class="p-3">{{ $product->category->name }}</td>
                        <td class="p-3">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="p-3">{{ $product->stock }}</td>
                        <td class="p-3">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-600">Edit</a> |
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
