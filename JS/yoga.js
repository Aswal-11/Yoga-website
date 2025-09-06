
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
  if (element) {
      const position = element.getBoundingClientRect();

      // Check if the element is within the viewport
      if (position.top < window.innerHeight && position.bottom >= 0) {
          element.classList.add("animate");
      }
  }
});
document.addEventListener('DOMContentLoaded', function() {
  const video = document.getElementById('backgroundVideo');
  const fallback = document.getElementById('videoFallback');
  
  if (video) {
      video.addEventListener('error', function() {
          if (fallback) {
              fallback.classList.remove('hidden');
          }
      });
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


// 
if (typeof AOS !== 'undefined') {
  AOS.init({
      duration: 800,  // animation duration
      once: true      // animate only once
  });
}