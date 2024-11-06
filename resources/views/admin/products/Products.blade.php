<x-Layout>
    <!-- Main Content -->
    <div class="container mx-auto my-10 flex space-x-6">
      <!-- Sidebar (Categories) -->
     <aside class="w-1/4 bg-white p-6 shadow-md rounded-md">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Categories</h2>
    <ul class="space-y-3">
        @foreach ($categories as $item)
        <li>
            <a href="{{ url('products/category/' . $item->slug) }}" 
               class="block px-4 py-2 rounded-md transition duration-300
                      {{ request()->is('products/category/' . $item->slug) ? 'bg-yellow-400 text-gray-900' : 'text-gray-700 hover:bg-yellow-400 hover:text-gray-900' }}">
                {{ $item->name }}
            </a>
        </li>
        @endforeach
    </ul>
</aside>
  
      <!-- Product Grid -->
      <main class="flex-1">
        <!-- Breadcrumb Navigation -->
        <nav class="text-sm mb-6 bg-gray-100 p-3 rounded-md shadow-sm">
          <a href="#" class="text-yellow-500 hover:underline">Home</a> /
          <a href="#" class="text-yellow-500 hover:underline">Catalog</a> /
          <span class="text-gray-500">Products</span>
        </nav>
  
        <!-- Product Sorting -->
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-bold text-gray-800">Products</h2>
          <select 
            class="border border-gray-300 p-2 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-400 transition">
            <option value="default">Sort by</option>
            <option value="price-asc">Price (Low to High)</option>
            <option value="price-desc">Price (High to Low)</option>
          </select>
        </div>
  
        <!-- Product List -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach($product as $products)
          <!-- Product Card -->
          <div class="bg-white p-5 shadow-md rounded-lg transform hover:-translate-y-2 hover:shadow-lg transition duration-300">
            <img src="{{ asset('/storage/'.$products->image) }}" 
                 alt="Product" 
                 class="w-full h-40 object-cover mb-4 rounded-md">
            <a href="/Products/{{ $products['slug'] }}">
              <h3 class="text-lg font-semibold text-gray-800 hover:underline">{{ $products->name }}</h3>
            </a>
            <p class="text-gray-600 mt-2">{{ $products->description }}</p>
            <h4 class="text-lg font-medium text-gray-700 mt-1">Rp {{ number_format($products->price, 0, ',', '.') }}</h4>
            <div class="mt-4">
              <a href="/Products/{{ $products['slug'] }}" 
                 class="text-yellow-500 hover:text-yellow-600 hover:underline font-semibold">
                View Details
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </main>
    </div>
  </x-Layout>
  