<footer class="bg-gradient-to-b from-gray-100 to-gray-200 text-gray-600 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Cosmic Yoga Section -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-gray-900">Cosmic Yoga</h3>
                <p class="text-gray-600 leading-relaxed">Discover inner peace and physical harmony through our transformative yoga classes.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-500 hover:text-gray-900 transition-colors duration-300">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook-f h-6 w-6"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 transition-colors duration-300">
                        <span class="sr-only">Instagram</span>
                        <i class="fab fa-instagram h-6 w-6"></i>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 transition-colors duration-300">
                        <span class="sr-only">Twitter</span>
                        <i class="fab fa-twitter h-6 w-6"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links Section -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-gray-900">Quick Links</h3>
                <ul class="space-y-2 sm:grid sm:grid-cols-2">
                    <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-300">Home</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-300">Classes</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-300">About Us</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-300">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Us Section -->
            <div class="space-y-4 ">
                <h3 class="text-xl font-bold text-gray-900">Contact Us</h3>
                <ul class="">
                    <li class="flex items-center">
                        <i class="fas fa-map-marker-alt h-5  w-5 mr-2 text-gray-500"></i>
                        <span class="text-gray-600">123 Serenity Lane, Peaceful City, 12345</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone h-5  w-5 mr-2 text-gray-500"></i>
                        <span class="text-gray-600">(123) 456-7890</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope h-5  w-5 mr-2 text-gray-500"></i>
                        <span class="text-gray-600">info@cosmicyoga.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-12 pt-8 border-t border-gray-300 text-center">
            <p class="text-gray-600">&copy; <span id="current-year"></span> Cosmic Yoga. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Script to update the current year -->
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="../JS/yoga.js"></script>
<!-- <script src="../JS/gsap.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
</body>

</html>