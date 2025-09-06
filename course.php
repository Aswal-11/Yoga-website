<?php 
$title='contact.php';
require('View/header.php'); 
?>

<section class="container mx-auto px-4 py-12 w-full bg-gray-200">
    <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">Featured Classes</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="block group">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform group-hover:scale-105">
                <div class="zoom-effect" 62>
                    <img src="images/hatha.jpg" alt="Hatha Yoga" class="w-full h-60 object-cover fade-in">
                </div>
                <div class="p-6 flex flex-col">
                    <div>
                        <h2 class="text-xl font-semibold mb-2 group-hover:text-indigo-600">Hatha Yoga</h2>
                        <p class="text-gray-600">A gentle introduction to basic yoga postures and breathing techniques.</p>
                    </div>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>

        <a href="#vinyasa" class="block group">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform group-hover:scale-105">
                <div class="zoom-effect">
                    <img src="images/yin.jpg" alt="Vinyasa Flow" class="w-full h-60 object-cover fade-in">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2 group-hover:text-indigo-600">Vinyasa Flow</h2>
                    <p class="text-gray-600">A dynamic practice synchronizing breath with a flowing sequence of postures.</p>
                </div>
            </div>
        </a>

        <a href="#ashtanga" class="block group">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform group-hover:scale-105">
                <div class="zoom-effect">
                    <img src="images/galler3.png" alt="Ashtanga Yoga" class="w-full h-60 object-cover fade-in">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2 group-hover:text-indigo-600">Ashtanga Yoga</h2>
                    <p class="text-gray-600">A rigorous style of yoga following a specific sequence of postures.</p>
                </div>
            </div>
        </a>

        <a href="#yin" class="block group">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform group-hover:scale-105">
                <div class="zoom-effect">
                    <img src="images/io.jpg" alt="Yin Yoga" class="w-full h-60 object-cover fade-in">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2 group-hover:text-indigo-600">Yin Yoga</h2>
                    <p class="text-gray-600">A slow-paced style with postures held for longer periods to increase flexibility.</p>
                </div>
            </div>
        </a>

        <a href="#restorative" class="block group">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform group-hover:scale-105">
                <div class="zoom-effect">
                    <img src="images/newnama.jpg" alt="Restorative Yoga" class="w-full h-60 object-cover fade-in">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2 group-hover:text-indigo-600">Restorative Yoga</h2>
                    <p class="text-gray-600">A relaxing practice using props to support the body in gentle stretches.</p>
                </div>
            </div>
        </a>

        <a href="#power" class="block group">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform group-hover:scale-105">
                <div class="zoom-effect">
                    <img src="images/power.avif" alt="Power Yoga" class="w-full h-60 object-cover fade-in">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2 group-hover:text-indigo-600">Power Yoga</h2>
                    <p class="text-gray-600">A vigorous, fitness-based approach to Vinyasa-style yoga.</p>
                </div>
            </div>
        </a>

        <a href="#kundalini" class="block group">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform group-hover:scale-105">
                <div class="zoom-effect">
                    <img src="https://source.unsplash.com/600x400/?yoga,kundalini" alt="Kundalini Yoga" class="w-full h-62 object-cover fade-in">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2 group-hover:text-indigo-600">Kundalini Yoga</h2>
                    <p class="text-gray-600">A spiritual practice combining poses with breath work, meditation, and mantras.</p>
                </div>
            </div>
        </a>

        <a href="#prenatal" class="block group">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform group-hover:scale-105">
                <div class="zoom-effect">
                    <img src="https://source.unsplash.com/600x400/?yoga,prenatal" alt="Prenatal Yoga" class="w-full h-62 object-cover fade-in">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2 group-hover:text-indigo-600">Prenatal Yoga</h2>
                    <p class="text-gray-600">Yoga adapted for expectant mothers to support their changing bodies.</p>
                </div>
            </div>
        </a>

        <a href="#acro" class="block group">
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform group-hover:scale-105">
                <div class="zoom-effect">
                    <img src="https://source.unsplash.com/600x400/?yoga,acro" alt="Acro Yoga" class="w-full h-62 object-cover fade-in">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2 group-hover:text-indigo-600">Acro Yoga</h2>
                    <p class="text-gray-600">A playful practice combining yoga and acrobatics with a partner.</p>
                </div>
            </div>
        </a>
    </div>
</section>

<?php
 require('View/footer.php');
?>