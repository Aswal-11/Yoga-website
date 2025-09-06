<?php 
$title='about.php';
require('View/header.php'); 
?>

<div class="bg-green-50 flex items-center justify-center min-h-screen">
    <div class="max-w-4xl bg-white shadow-lg rounded-2xl p-8 md:p-12 text-gray-800">
        <h1 class="text-4xl font-bold text-center text-green-700 mb-6">About Yoga</h1>
        <p class="text-lg text-gray-600 leading-relaxed mb-4">
            Yoga is an ancient practice that unites the body, mind, and spirit. Through postures, breathing exercises, and meditation, yoga helps individuals enhance flexibility, build strength, and achieve inner peace.
        </p>
        <p class="text-lg text-gray-600 leading-relaxed mb-4">
            Practicing yoga regularly can improve overall well-being, reduce stress, and promote a balanced lifestyle. Whether you are a beginner or an advanced practitioner, yoga offers a path to self-discovery and holistic health.
        </p>
        <div class="mt-6 flex justify-center">
            <img src="images/bikram.jpg" alt="Yoga" class="rounded-lg shadow-md w-full md:w-3/4">
        </div>
    </div>
</div>

<?php
require('View/footer.php');
?>