
const menuToggle = document.getElementById("menu-toggle");
const closeMenu = document.getElementById("close-menu");
const mobileMenu = document.getElementById("mobile-menu");
const overlay = document.getElementById("overlay");

function toggleMenu() {
  mobileMenu.classList.toggle("translate-x-full");
  overlay.classList.toggle("hidden");
}

menuToggle.addEventListener("click", toggleMenu);
closeMenu.addEventListener("click", toggleMenu);
overlay.addEventListener("click", toggleMenu);

document.addEventListener("scroll", function () {
  const element = document.getElementById("animated-element");
  const position = element.getBoundingClientRect();

  // Check if the element is within the viewport
  if (position.top < window.innerHeight && position.bottom >= 0) {
    element.classList.add("animate");
  }
});

document.addEventListener('DOMContentLoaded', function() {
  const video = document.getElementById('backgroundVideo');
  const fallback = document.getElementById('videoFallback');
  
  // Check if video can play, otherwise show fallback
  video.addEventListener('error', function() {
      fallback.classList.remove('hidden');
  });
  
  // For mobile devices, we might want to use the fallback image to save data
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
      // Optional: Use fallback for mobile or keep video based on preference
      // fallback.classList.remove('hidden');
      // video.style.display = 'none';
  }
  
  // Add intersection observer for elements to animate when in viewport
  const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
  };
  
  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('animated');
          }
      });
  }, observerOptions);
  
  // Observe all elements with animation classes
  document.querySelectorAll('.animate-fade-in-up, .animate-fade-in-scale').forEach(el => {
      observer.observe(el);
  });
});