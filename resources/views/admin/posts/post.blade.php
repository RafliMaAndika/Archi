<x-Layout>
  <div class="max-w-4xl mx-auto px-4 sm:px-8 lg:px-16 py-12">

    <!-- Gambar Berita -->
    <img src="{{ asset('/storage/'.$post->image) }}" alt="Gambar Berita" 
         class="w-full h-96 object-cover rounded-xl mb-8 transition-transform duration-300 hover:scale-105 shadow-lg">

    <!-- Judul Berita -->
    <h1 class="text-4xl font-extrabold text-gray-900 mb-6 leading-tight">
      {{ $post['title'] }}
    </h1>

    <!-- Informasi Author dan Tanggal -->
    <div class="flex justify-between items-center text-sm text-gray-500 mb-8">
      <div class="flex items-center space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
             stroke="currentColor" class="w-5 h-5 text-yellow-500">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M5.121 19a2.5 2.5 0 01.864-1.964l.49-.49a2.5 2.5 0 01-.49-1.964l4.293-4.293a2.5 2.5 0 011.414-.414h2a2.5 2.5 0 012.121 1.415L18.293 15M6 13v1m-1 4h6m1-1a5 5 0 1010 0 5 5 0 00-5-5m2 0a2 2 0 110-4" />
        </svg>
        <p class="italic">{{ $post->author }}</p>
      </div>
      <p class="text-gray-700">{{ $post->created_at->diffForHumans() }}</p>
    </div>

    <!-- Isi Berita -->
    <article class="prose lg:prose-xl max-w-none text-gray-800 leading-relaxed">
      <p>{{ $post['body'] }}</p>
    </article>

    <!-- Tombol Kembali -->
    <div class="mt-10">
      <a href="/Posts" class="inline-block bg-yellow-400 text-gray-900 px-6 py-3 rounded-lg font-semibold 
         hover:bg-yellow-500 transition-colors shadow-md">
        ← Kembali ke Berita
      </a>
    </div>

  </div>
</x-Layout>
