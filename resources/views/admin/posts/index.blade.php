<x-layout>
    <div class="container mt-10">
        <h1 class="text-3xl font-bold mb-6">Manajemen Post</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.posts.create') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Post</a>

        <table class="w-full bg-white shadow-md rounded-lg overflow-hidden mt-4">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left">Judul</th>
                    <th class="p-3 text-left">Konten</th>
                    <th class="p-3 text-left">Penulis</th>
                    <th class="p-3 text-left">Status</th>
                    <th class="p-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="border-t">
                        <td class="p-3">{{ $post->title }}</td>
                        <td class="p-3">{{ $post->body }}</td>
                        <td class="p-3">{{ $post->author }}</td>
                        <td class="p-3">{{ $post->is_published ? 'Dipublikasikan' : 'Draft' }}</td>
                        <td class="p-3">
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="text-blue-600">Edit</a> |
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="inline-block">
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
