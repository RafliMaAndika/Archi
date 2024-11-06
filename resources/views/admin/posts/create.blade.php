<x-layout>
    <div class="container mt-10 max-w-xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Tambah Post</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="title" class="block font-semibold">Judul</label>
                <input type="text" name="title" id="title" class="w-full p-3 border rounded" required>
            </div>

            <div>
                <label for="author" class="block font-semibold">Nama Penulis</label>
                <input type="text" name="author" id="author" class="w-full p-3 border rounded" required>
            </div>

            <div>
                <label for="body" class="block font-semibold">Konten</label>
                <textarea name="body" id="body" rows="4" class="w-full p-3 border rounded" required></textarea>
            </div>

            <div>
                <label for="image" class="block font-semibold">Gambar</label>
                <input type="file" name="image" id="image" class="w-full p-3 border rounded" required>
            </div>

            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-layout>
