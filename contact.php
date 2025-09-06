<?php 
$title = 'Contact Us';
require('View/header.php'); 
?>

<section class="bg-gradient-to-br from-green-50 to-blue-50 py-16 px-6 lg:px-20">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-4xl font-bold text-green-700 mb-4">Get in Touch</h2>
        <p class="text-lg text-gray-600">
            We’d love to hear from you! Reach out through the details below or visit us directly.
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8 text-center">
        <!-- Phone -->
        <div class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition">
            <div class="flex justify-center mb-4">
                <span class="h-14 w-14 flex items-center justify-center rounded-full bg-green-100 text-green-600">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l3.6 7.59-1.35 2.44A2 2 0 009 18h6a2 2 0 001.75-1.03l3.64-6.34A1 1 0 0019.64 9H7" />
                    </svg>
                </span>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Call Us</h3>
            <p class="text-gray-600">+91 98765 43210</p>
            <a href="tel:+919876543210" 
               class="inline-block mt-4 px-5 py-2 bg-green-600 text-white rounded-full hover:bg-green-700 transition">
               Call Now
            </a>
        </div>

        <!-- Email -->
        <div class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition">
            <div class="flex justify-center mb-4">
                <span class="h-14 w-14 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0a4 4 0 018 0zM12 14v6m0-6H8m4 0h4" />
                    </svg>
                </span>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Email Us</h3>
            <p class="text-gray-600">info@yogacenter.com</p>
            <a href="mailto:info@yogacenter.com" 
               class="inline-block mt-4 px-5 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition">
               Send Email
            </a>
        </div>

        <!-- Address -->
        <div class="bg-white shadow-lg rounded-2xl p-6 hover:shadow-xl transition">
            <div class="flex justify-center mb-4">
                <span class="h-14 w-14 flex items-center justify-center rounded-full bg-yellow-100 text-yellow-600">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M17.657 16.657L13.414 12.414a4 4 0 00-5.657 0L6.343 13.828A8 8 0 1117.657 16.657z" />
                    </svg>
                </span>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Visit Us</h3>
            <p class="text-gray-600">123 Yoga Street, Wellness City</p>
            <a href="https://maps.google.com?q=123+Yoga+Street" target="_blank"
               class="inline-block mt-4 px-5 py-2 bg-yellow-600 text-white rounded-full hover:bg-yellow-700 transition">
               View Map
            </a>
        </div>
    </div>

    <!-- Map Section -->
    <div class="mt-16">
        <iframe class="w-full h-80 rounded-2xl shadow-lg"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.093493031137!2d-122.41941528468155!3d37.77492977975964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064d92c9e77%3A0x5d9f1c7f0e8e4b2!2sYoga%20Center!5e0!3m2!1sen!2sin!4v1619199999999"
            allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<?php
require('View/footer.php');
?>
