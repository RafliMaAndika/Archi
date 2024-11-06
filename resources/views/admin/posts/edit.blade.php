<x-layout>
    <div class="container mt-10 max-w-xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">Edit Post</h1>

        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="space-y-6" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block font-semibold">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="w-full p-3 border rounded" required>
            </div>

            <div>
                <label for="author_name" class="block font-semibold">Nama Penulis</label>
                <input type="text" name="author_name" id="author_name" value="{{ old('author_name', $post->author) }}" class="w-full p-3 border rounded" required>
            </div>

            <div>
                <label for="body" class="block font-semibold">Konten</label>
                <textarea name="body" id="body" rows="4" class="w-full p-3 border rounded" required>{{ old('body', $post->body) }}</textarea>
            </div>

            <div>
                <label for="image" class="block font-semibold">Gambar</label>
                <input type="file" name="image" id="image" class="w-full p-3 border rounded">
                <p class="text-sm text-gray-500">Kosongkan jika tidak ingin mengubah gambar.</p>
            </div>

            <div>
                <label for="is_published" class="block font-semibold">Status</label>
                <select name="is_published" id="is_published" class="w-full p-3 border rounded">
                    <option value="1" {{ $post->is_published ? 'selected' : '' }}>Dipublikasikan</option>
                    <option value="0" {{ !$post->is_published ? 'selected' : '' }}>Draft</option>
                </select>
            </div>

            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-layout>
