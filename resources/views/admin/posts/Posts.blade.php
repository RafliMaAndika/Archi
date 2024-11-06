<x-Layout>
  <!-- Hero Section: Featured News -->
  <section class="relative h-96 bg-cover bg-center mb-16" 
           style="background-image: url('https://mmc.tirto.id/image/otf/970x0/2021/02/04/ilustrasi-pertambangan-istock1_ratio-16x9.jpg');">
    <div class="absolute inset-0 bg-gray-900/80 flex items-center justify-center">
      <div class="text-center text-white px-6">
        <h1 class="text-5xl font-extrabold mb-4 tracking-wide">Featured News Title</h1>
        <p class="text-lg mb-6 text-gray-300">An in-depth look at our top story of the day. Stay informed with the latest updates.</p>
        <a href="#" 
           class="inline-block px-8 py-3 bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-medium rounded-full shadow-lg transition duration-300">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- Latest News Grid Section -->
  <section class="container mx-auto px-6 py-10 max-w-7xl">
    <h2 class="text-4xl font-bold text-center mb-12 tracking-wide text-gray-800">Latest News</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
      @foreach ($posts as $post)
      <!-- News Card -->
      <article 
        class="bg-white shadow-md rounded-lg overflow-hidden transform hover:-translate-y-2 hover:shadow-xl transition duration-300">
        <img src="{{ asset('/storage/'.$post->image) }}" alt="News Image" class="w-full h-52 object-cover">
        <div class="p-6">
          <a href="/Posts/{{ $post['slug'] }}" class="hover:underline">
            <h3 class="text-2xl font-semibold mb-2 text-gray-900">{{ $post['title'] }}</h3>
          </a>
          <p class="text-gray-600 mb-4">{{ Str::limit($post['body'], 120) }}</p>
          <a href="/Posts/{{ $post['slug'] }}" 
             class="text-yellow-500 hover:text-yellow-600 font-semibold transition">
            Read More &rarr;
          </a>
        </div>
      </article>
      @endforeach
    </div>
  </section>
  {{ $posts->links()}}
</x-Layout>
