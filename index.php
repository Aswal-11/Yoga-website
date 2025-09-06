<?php
$title = 'Home';
require('View/header.php'); ?>

<div class="relative w-full h-[70vh] md:h-screen bg-cover bg-center overflow-hidden">
    <!-- Video as Background -->
    <video
        id="backgroundVideo"
        autoplay
        loop
        muted
        playsinline
        class="absolute top-0 left-0 w-full h-full object-cover z-0">
        <!-- Fallback image in case video doesn't load -->
        <source src="vedio/vedio.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Fallback image for mobile if needed -->
    <div id="videoFallback" class="absolute top-0 left-0 w-full h-full bg-cover bg-center z-0 hidden" style="background-image: url('https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1820&q=80');"></div>

    <!-- Gradient Overlay -->
    <div class="absolute top-0 left-0 w-full h-full video-overlay z-5"></div>

    <!-- Decorative floating elements -->
    <div class="floating-element w-20 h-20 top-1/4 left-1/4 animate-float" style="animation-delay: 0.5s;"></div>
    <div class="floating-element w-12 h-12 top-1/3 right-1/4 animate-float" style="animation-delay: 1s;"></div>
    <div class="floating-element w-16 h-16 bottom-1/4 left-1/3 animate-float" style="animation-delay: 1.5s;"></div>

    <!-- Content Over the Video -->
    <div class="flex flex-col gap-6 w-full justify-center items-center h-full text-white px-6 sm:px-12 lg:px-20 absolute top-0 left-0 z-10">
        <!-- Headline -->
        <h1 class="text-center text-4xl sm:text-5xl lg:text-7xl font-playfair font-bold animate-fade-in-up">
            <span class="block opacity-0" style="animation: fadeInUp 1s ease-out 0.2s forwards;">Discover</span>
            <span class="block text-indigo-300 mt-2 opacity-0" style="animation: fadeInUp 1s ease-out 0.5s forwards;">Cosmic Yoga</span>
        </h1>

        <!-- Subheadlines -->
        <div class="flex flex-col gap-3 text-lg sm:text-2xl lg:text-3xl text-center mt-4">
            <p class="opacity-0 animate-fade-in-up" style="animation-delay: 0.8s;">Find peace and balance in your life</p>
            <p class="opacity-0 animate-fade-in-up" style="animation-delay: 1.1s;">Embrace wellness and tranquility</p>
        </div>

        <!-- Call-to-Action Button -->
        <div class="text-center mt-8 opacity-0 animate-fade-in-scale" style="animation-delay: 1.4s;">
            <a
                href="#"
                class="inline-block px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white text-xl sm:text-2xl font-semibold rounded-full shadow-lg btn-glow transition-all duration-300 transform hover:-translate-y-1 ">
                Begin Your Journey
            </a>
        </div>

    </div>
</div>

<!-- Intro section -->
<div class="flex items-center justify-center bg-gradient-to-br from-green-900 via-green-800 to-green-700 p-4 md:px-10 py-8 md:py-20">
    <div class=" w-full bg-white/5 backdrop-blur-md rounded-3xl overflow-hidden shadow-2xl border border-white/10">
        <div class="grid md:grid-cols-2 gap-0">
            <!-- Image Section -->
            <div class="relative overflow-hidden h-80 md:h-full">
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/30 z-10"></div>
                <img
                    src="../images/de.JPG"
                    class="w-full h-full object-cover transform transition-all duration-700 hover:scale-105"
                    alt="Cosmic Yoga Image" />

            </div>

            <!-- Content Section -->
            <div class="flex flex-col justify-center p-10 bg-gradient-to-br from-green-800 to-green-900 text-white relative">
                <!-- Decorative elements -->
                <div class="absolute top-6 right-6 opacity-20">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4Z" stroke="white" stroke-width="2" />
                        <path d="M12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6Z" stroke="white" stroke-width="2" />
                        <path d="M12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8Z" stroke="white" stroke-width="2" />
                    </svg>
                </div>

                <h1 class="text-4xl md:text-5xl  font-bold mb-6 tracking-wide relative">
                    Cosmic Yoga
                    <span class="absolute -bottom-2 left-0 w-16 h-1 bg-amber-400 rounded-full"></span>
                </h1>

                <p class="text-lg leading-relaxed mb-8 font-light opacity-90">
                    Discover the transformative power of yoga to align your body, mind, and spirit with the universe. At Cosmic Yoga, we provide a serene sanctuary that nurtures your inner peace and holistic wellness.
                </p>

                <p class="text-lg leading-relaxed mb-8 font-light opacity-90">
                    From beginners to advanced practitioners, our diverse classes offer personalized guidance within a supportive community. Whether you seek physical vitality or mental clarity, embark on this journey with us and connect with like-minded souls.
                </p>

                <div class="flex flex-wrap gap-4 mt-4">
                    <button class="px-6 py-3 bg-amber-500 hover:bg-amber-600 text-white rounded-full font-medium transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl">
                        Begin Your Journey
                    </button>
                    <button class="px-6 py-3 bg-transparent border-2 border-white/30 hover:border-amber-400 text-white rounded-full font-medium transition-all duration-300">
                        View Classes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Description -->
<div class="cosmic-yoga-section bg-gradient-to-br from-light-blue via-white to-deep-blue">

    <!-- Section -->
    <div class="py-16 lg:py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Heading -->
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-3xl sm:text-4xl font-bold text-indigo-900 mb-6">
                    Discover the Cosmic Yoga Difference
                </h2>
                <p class="text-xl text-indigo-700/90 leading-relaxed">
                    At Cosmic Yoga, we believe in the transformative power of yoga to align your body, mind, and spirit with the universe.
                </p>
            </div>

            <!-- Features -->
            <div class="mt-16 lg:mt-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-12">

                    <!-- Feature 1 -->
                    <div data-aos="fade-up" data-aos-delay="0"
                        class="relative bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="absolute -top-5 left-8 w-12 h-12 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 flex items-center justify-center shadow-md">
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-indigo-900 mt-4 mb-3">Expert Instructors</h3>
                        <p class="text-indigo-700/90 leading-relaxed">
                            Our certified instructors bring years of experience and a passion for yoga to every class, providing personalized guidance.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="relative bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="absolute -top-5 left-8 w-12 h-12 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 flex items-center justify-center shadow-md">
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-indigo-900 mt-4 mb-3">Variety of Classes</h3>
                        <p class="text-indigo-700/90 leading-relaxed">
                            From gentle Hatha to intense Power Yoga, we offer diverse classes for all levels and preferences, both online and in-studio.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div data-aos="fade-up" data-aos-delay="400"
                        class="relative bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="absolute -top-5 left-8 w-12 h-12 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 flex items-center justify-center shadow-md">
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-indigo-900 mt-4 mb-3">Holistic Approach</h3>
                        <p class="text-indigo-700/90 leading-relaxed">
                            We focus on the mind-body connection, integrating meditation and breathwork to promote overall wellness and inner peace.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div data-aos="fade-up" data-aos-delay="600"
                        class="relative bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="absolute -top-5 left-8 w-12 h-12 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 flex items-center justify-center shadow-md">
                            <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-indigo-900 mt-4 mb-3">Supportive Community</h3>
                        <p class="text-indigo-700/90 leading-relaxed">
                            Join a welcoming community of like-minded individuals who support each other on their yoga and wellness journeys.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>


<!-- Hero Section -->
<div class="relative bg-indigo-900 overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Find Your Inner Peace with</span>
                        <span class="block text-indigo-400 xl:inline">Cosmic Yoga</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Embark on a journey of self-discovery and wellness. Our expert instructors guide you through transformative yoga practices that nurture your body, mind, and spirit.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Get started
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                Learn more
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://cdn.pixabay.com/photo/2020/10/07/17/22/women-5635784_1280.png" alt="Yoga practice">
    </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php require('View/footer.php'); ?>