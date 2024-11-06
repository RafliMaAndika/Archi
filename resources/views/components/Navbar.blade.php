<nav class="bg-gray-900 text-white" x-data="{ isOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center">
        <a href="/" class="flex items-center space-x-2">
          <img class="h-10 w-10 object-contain" src="/gambar/archimecha.png" alt="Archi">
          <span class="text-lg font-semibold text-yellow-400">Archi Mechaprep</span>
        </a>
        <div class="hidden md:block ml-10">
          <div class="flex space-x-6 items-baseline">
            <x-Nav-Link href="/" activeClass="text-yellow-400">Home</x-Nav-Link>
            <x-Nav-Link href="/product">Product</x-Nav-Link>
            <x-Nav-Link href="/Posts">News</x-Nav-Link>
          <!--  <x-Nav-Link href="/Client">Client</x-Nav-Link> -->
            <x-Nav-Link href="/Company">Company</x-Nav-Link>
          <!--  <x-Nav-Link href="/Service">Service</x-Nav-Link> -->
            <x-Nav-Link href="/Contact">Contact</x-Nav-Link>
          </div>
        </div>
      </div>

      <!-- User Menu
      <div class="hidden md:flex items-center space-x-4">
        <button class="relative p-1 rounded-full bg-gray-800 hover:bg-yellow-500 transition">
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6 text-yellow-400" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
          </svg>
        </button> -->

        <!-- Profile Dropdown 
        <div class="relative">
          <button @click="isOpen = !isOpen" class="flex items-center text-sm rounded-full focus:outline-none">
            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&w=256&h=256&q=80" alt="Profile">
          </button>

          <div x-show="isOpen" class="absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-lg py-1">
            <a href="#" class="block px-4 py-2 hover:bg-yellow-400">Your Profile</a>
            <a href="#" class="block px-4 py-2 hover:bg-yellow-400">Settings</a>
            <a href="#" class="block px-4 py-2 hover:bg-yellow-400">Sign out</a>
          </div>
        </div>
      </div> -->

      <!-- Mobile Menu Button -->
      <div class="-mr-2 flex md:hidden">
        <button @click="isOpen = !isOpen" class="p-2 text-yellow-400 hover:bg-gray-700 focus:outline-none">
          <span class="sr-only">Open main menu</span>
          <svg :class="{'hidden': isOpen, 'block': !isOpen}" class="h-6 w-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div x-show="isOpen" class="md:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <a href="/" class="block px-3 py-2 text-base font-medium hover:bg-yellow-400">Home</a>
      <a href="/Product" class="block px-3 py-2 text-base font-medium hover:bg-yellow-400">product</a>
      <a href="/Posts" class="block px-3 py-2 text-base font-medium hover:bg-yellow-400">News</a>
      <a href="/Company" class="block px-3 py-2 text-base font-medium hover:bg-yellow-400">Company</a>
    </div>
   <!-- <div class="border-t border-gray-700">
      <div class="flex items-center px-5 pt-4 pb-3">
        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&w=256&h=256&q=80" alt="Profile">
        <div class="ml-3">
          <div class="text-base font-medium text-white">Tom Cook</div>
          <div class="text-sm text-gray-400">tom@example.com</div>
        </div>
      </div>
      <div class="mt-3 space-y-1 px-2">
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 hover:bg-yellow-400">Your Profile</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 hover:bg-yellow-400">Settings</a>
        <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 hover:bg-yellow-400">Sign out</a>
      </div>
    </div> -->
  </div>
</nav>
