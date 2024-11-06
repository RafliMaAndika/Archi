<x-Layout>
  <!-- Contact Us Header -->
  <section class="bg-gray-800 text-white py-12">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-extrabold mb-4">Contact Us</h1>
      <p class="text-lg">We're here to help. Reach out to us with any inquiries or concerns.</p>
    </div>
  </section>

  <!-- Contact Form and Information Section -->
  <section class="container mx-auto px-4 py-12 grid grid-cols-1 lg:grid-cols-2 gap-12">
    <!-- Contact Form -->
    <div class="bg-white shadow-lg rounded-lg p-8">
      <h2 class="text-2xl font-bold mb-6 text-gray-800">Get in Touch</h2>
      <form action="#" method="POST" class="space-y-6">
        <div>
          <label for="name" class="block text-gray-700 font-medium">Your Name</label>
          <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
        </div>

        <div>
          <label for="email" class="block text-gray-700 font-medium">Your Email</label>
          <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
        </div>

        <div>
          <label for="subject" class="block text-gray-700 font-medium">Subject</label>
          <input type="text" id="subject" name="subject" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
        </div>

        <div>
          <label for="message" class="block text-gray-700 font-medium">Your Message</label>
          <textarea id="message" name="message" rows="6" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400" required></textarea>
        </div>

        <div>
          <button type="submit" class="w-full bg-yellow-400 text-gray-800 font-semibold py-3 rounded-lg hover:bg-yellow-500 transition duration-300">Send Message</button>
        </div>
      </form>
    </div>

    <!-- Contact Information -->
    <div class="flex flex-col justify-between bg-gray-100 p-8 rounded-lg shadow-lg">
      <div>
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Contact Information</h2>
        <p class="mb-4 text-gray-700">Feel free to reach us through the following channels:</p>

        <div class="mb-6">
          <h3 class="text-lg font-semibold">Address</h3>
          <p class="text-gray-600">123 Main Street, City, Country</p>
        </div>

        <div class="mb-6">
          <h3 class="text-lg font-semibold">Phone</h3>
          <p class="text-gray-600">+123 456 7890</p>
        </div>

        <div>
          <h3 class="text-lg font-semibold">Email</h3>
          <p class="text-gray-600">info@company.com</p>
        </div>
      </div>

      <div class="mt-8">
        <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
        <div class="flex space-x-4">
          <a href="#" class="text-yellow-400 hover:text-yellow-500"><i class="fab fa-facebook fa-2x"></i></a>
          <a href="#" class="text-yellow-400 hover:text-yellow-500"><i class="fab fa-twitter fa-2x"></i></a>
          <a href="#" class="text-yellow-400 hover:text-yellow-500"><i class="fab fa-instagram fa-2x"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="w-full h-64 mb-12">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354349078494!2d144.95373521577145!3d-37.81621797975166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5778d9fd30d1e2f!2sMelbourne%20CBD!5e0!3m2!1sen!2sau!4v1622863415291!5m2!1sen!2sau"
      width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </section>
</x-Layout>
