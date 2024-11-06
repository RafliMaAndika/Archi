<x-Layout>
    <!-- Hero Section -->
    <section class="hero h-screen flex items-center justify-center bg-cover bg-center text-white"
      style="background-image: url('https://sefasgroup.com/upload/blogs/blog_image_14122023_9588.jpeg');">
      <div class="text-center">
        <h1 class="text-6xl font-extrabold mb-6 tracking-wide">Welcome to Archi</h1>
        <p class="text-xl mb-8">Your partner in technology and innovation.</p>
        <a href="/product" class="bg-yellow-500 text-white px-8 py-4 rounded-full shadow-lg hover:bg-yellow-600 transition">
          Explore Products
        </a>
      </div>
    </section>
  
    <main>
      <div class="container mx-auto px-6 py-10 max-w-7xl">
  
        <!-- Kategori dan Produk Section -->
        <section class="py-16">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <!-- Kategori Produk -->
            <div class="bg-white shadow-lg rounded-lg p-8">
              <h3 class="text-2xl font-semibold mb-6">Kategori Produk</h3>
              <ul class="space-y-4">
                @foreach ($categories as $item)
                <li>
                  <a href="#"
                    class="block text-lg text-gray-700 hover:bg-yellow-100 hover:text-yellow-800 p-3 rounded transition duration-300">
                    {{$item->name}}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
  
            <!-- Produk -->
            <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-3 gap-8">
              @foreach($product as $products)
              <div class="bg-white shadow-lg rounded-lg p-6">
                <img src="img/product1.jpg" alt="Product" class="w-full h-48 object-cover mb-4 rounded">
                <h4 class="text-2xl font-semibold mb-2">{{ $products->name }}</h4>
                <p class="text-gray-600">{{ $products->description }}</p>
                <p class="text-xl font-bold mt-2 text-yellow-600">{{ $products->price }}</p>
              </div>
              @endforeach
            </div>
          </div>
        </section>
  
        <!-- Berita Terbaru Section -->
        <section class="py-16 bg-gray-50">
          <h2 class="text-4xl font-bold text-center mb-12">Berita Terbaru</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($posts as $post)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
              <img src="img/news1.jpg" alt="Berita" class="w-full h-48 object-cover">
              <div class="p-6">
                <span class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
                <a href="/Posts/{{ $post['slug'] }}">
                  <h3 class="text-2xl font-semibold my-2">{{ $post['title'] }}</h3>
                </a>
                <p class="text-gray-700">{{ Str::limit($post['body'], 100) }}</p>
                <a href="/Posts/{{ $post['slug'] }}" class="text-yellow-500 font-semibold mt-4 inline-block hover:text-yellow-600">
                  Baca Selengkapnya
                </a>
              </div>
            </div>
            @endforeach
          </div>
        </section>
  
        <!-- Tentang Kami Section -->
        <section class="py-16 bg-white">
          <h2 class="text-4xl font-bold text-center mb-8">Tentang Kami</h2>
          <p class="text-lg text-center text-gray-700 max-w-2xl mx-auto">

            Kami adalah <span class="text-yellow-500 font-semibold">Archi</span>, perusahaan yang berdedikasi untuk memberikan solusi inovatif dan layanan berkualitas tinggi dalam bidang mesin preparasi tambang. Dengan fokus pada efisiensi dan teknologi terkini, kami berkomitmen untuk mendukung operasional tambang Anda melalui produk dan layanan yang andal serta berkelanjutan.
          </p>
        </section>
  
        <!-- Klien Kami Section -->
        <section class="py-16 bg-gray-50">
          <h2 class="text-4xl font-bold text-center mb-8">Klien Kami</h2>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="flex justify-center items-center">
              <img src="img/client1.png" alt="Client 1" class="h-16 object-contain">
            </div>
            <div class="flex justify-center items-center">
              <img src="img/client2.png" alt="Client 2" class="h-16 object-contain">
            </div>
            <div class="flex justify-center items-center">
              <img src="img/client3.png" alt="Client 3" class="h-16 object-contain">
            </div>
            <div class="flex justify-center items-center">
              <img src="img/client4.png" alt="Client 4" class="h-16 object-contain">
            </div>
          </div>
        </section>
  
        <!-- Kontak Kami Section -->
        <section class="py-16 bg-white">
          <h2 class="text-4xl font-bold text-center mb-8">Kontak Kami</h2>
          <form class="max-w-lg mx-auto bg-gray-50 p-8 shadow-lg rounded-lg">
            <div class="mb-4">
              <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
              <input type="text" id="name" name="name" required
                class="w-full border border-gray-300 p-3 rounded focus:ring-2 focus:ring-yellow-500">
            </div>
            <div class="mb-4">
              <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
              <input type="email" id="email" name="email" required
                class="w-full border border-gray-300 p-3 rounded focus:ring-2 focus:ring-yellow-500">
            </div>
            <div class="mb-4">
              <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
              <textarea id="message" name="message" rows="4" required
                class="w-full border border-gray-300 p-3 rounded focus:ring-2 focus:ring-yellow-500"></textarea>
            </div>
            <button type="submit" class="bg-yellow-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-yellow-600 transition">
              Kirim Pesan
            </button>
          </form>
        </section>
  
      </div>
    </main>
  </x-Layout>
  