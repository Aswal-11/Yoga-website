<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?></title>
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- font end -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="../css/index.css" rel="stylesheet" />
  <link href="../css/index2.css" rel="stylesheet" />

  <style>
    /* CSS for animations */
  </style>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'deep-blue': '#1E3A8A',
            'light-blue': '#818CF8',
            'soft-teal': '#81D8D0',
            'soft-white': '#F0F9FF',
          },
          fontFamily: {
            serif: ['Playfair Display', 'serif'],
            sans: ['Inter', 'sans-serif'],
          },
          animation: {
            'float': 'float 6s ease-in-out infinite',
          },
          keyframes: {
            float: {
              '0%, 100%': {
                transform: 'translateY(0)'
              },
              '50%': {
                transform: 'translateY(-10px)'
              },
            }
          }
        }
      }
    }
  </script>
</head>

<body>
  <!-- Navbar -->
  <!-- Responsive Navbar Component -->
  <nav class="bg-gray-800 p-4 relative fadeindown">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo Section -->
      <div class="flex">
        <a href="#" class="text-white font-bold text-xl"> COSMIC YOGA</a>
      </div>

      <!-- Desktop Menu Links -->
      <div class="hidden md:flex space-x-6">
        <a href="/index.php" class="text-gray-300 font-semibold hover:text-white">Home</a>
        <a href="/about.php" class="text-gray-300 font-semibold hover:text-white">About</a>
        <a
          href="/course.php"
          class="text-gray-300 font-semibold hover:text-white">Courses</a>
        <a
          href="/contact.php"
          class="text-gray-300 font-semibold hover:text-white">Contact Us</a>
      </div>

      <!-- Mobile Menu Button -->
      <button
        id="menu-toggle"
        class="md:hidden text-gray-300 focus:outline-none">
        <svg
          class="w-6 h-6"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>

    <!-- Right-Side Sliding Mobile Menu Links -->
    <div
      id="mobile-menu"
      class="fixed inset-y-0 right-0 w-3/4 bg-gray-800 transform translate-x-full transition-transform duration-800 ease-in-out md:hidden space-y-2 p-4 z-20">
      <!-- Close Button -->
      <div class="flex justify-end">
        <button id="close-menu" class="text-gray-300 focus:outline-none mb-4">
          <svg
            class="w-6 h-6"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <a
        href="/index.php"
        class="block text-gray-300 font-semibold hover:text-white">Home</a>
      <a
        href="/about.php"
        class="block text-gray-300 font-semibold hover:text-white">About</a>
      <a
        href="#courses"
        class="block text-gray-300 font-semibold hover:text-white">Courses</a>
      <a
        href="/contact.php"
        class="block text-gray-300 font-semibold hover:text-white">Contact Us</a>
    </div>

    <!-- Overlay for Outside Click -->
    <div
      id="overlay"
      class="fixed inset-0 bg-black opacity-50 hidden z-10 md:hidden"></div>
  </nav>
  <!-- navbar end -->