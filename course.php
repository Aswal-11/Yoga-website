<?php 
$title='contact.php';
require('View/header.php'); 
?>

<section class="container mx-auto px-4 py-12 w-full bg-gray-200">
    <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-8">Featured Classes</h2>
    <div id="class-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- JS will render yoga classes here -->
    </div>
</section>

<script>
  // ✅ Same contact number for booking
  const bookingNumber = "+919876543210";

  // ✅ Yoga classes data
  const yogaClasses = [
    {
      title: "Hatha Yoga",
      description: "A gentle introduction to basic yoga postures and breathing techniques.",
      img: "images/hatha.jpg",
      link: "#hatha"
    },
    {
      title: "Vinyasa Flow",
      description: "A dynamic practice synchronizing breath with a flowing sequence of postures.",
      img: "images/yin.jpg",
      link: "#vinyasa"
    },
    {
      title: "Ashtanga Yoga",
      description: "A rigorous style of yoga following a specific sequence of postures.",
      img: "images/galler3.png",
      link: "#ashtanga"
    },
    {
      title: "Yin Yoga",
      description: "A slow-paced style with postures held for longer periods to increase flexibility.",
      img: "images/io.jpg",
      link: "#yin"
    },
    {
      title: "Restorative Yoga",
      description: "A relaxing practice using props to support the body in gentle stretches.",
      img: "images/newnama.jpg",
      link: "#restorative"
    },
    {
      title: "Power Yoga",
      description: "A vigorous, fitness-based approach to Vinyasa-style yoga.",
      img: "images/power.avif",
      link: "#power"
    },
    {
      title: "Kundalini Yoga",
      description: "A spiritual practice combining poses with breath work, meditation, and mantras.",
      img: "https://source.unsplash.com/600x400/?yoga,kundalini",
      link: "#kundalini"
    },
    {
      title: "Prenatal Yoga",
      description: "Yoga adapted for expectant mothers to support their changing bodies.",
      img: "https://source.unsplash.com/600x400/?yoga,prenatal",
      link: "#prenatal"
    },
    {
      title: "Acro Yoga",
      description: "A playful practice combining yoga and acrobatics with a partner.",
      img: "https://source.unsplash.com/600x400/?yoga,acro",
      link: "#acro"
    }
  ];

  // ✅ Render function
  const container = document.getElementById("class-container");
  yogaClasses.forEach((cls) => {
    const div = document.createElement("div");
    div.className = "block group";
    div.innerHTML = `
      <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform group-hover:scale-105">
        <div class="zoom-effect">
          <img src="${cls.img}" alt="${cls.title}" class="w-full h-60 object-cover fade-in">
        </div>
        <div class="p-6 flex flex-col justify-between">
          <div>
            <h2 class="text-xl font-semibold mb-2 group-hover:text-indigo-600">${cls.title}</h2>
            <p class="text-gray-600 mb-4">${cls.description}</p>
          </div>
          <div class="flex space-x-3 mt-auto">
            <a href="${cls.link}" 
               class="px-4 py-2 text-indigo-600 border border-indigo-600 rounded-lg hover:bg-indigo-600 hover:text-white transition">
              Learn More
            </a>
            <a href="tel:${bookingNumber}" 
               class="px-4 py-2 text-white bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700 transition">
              📞 Book Now
            </a>
          </div>
        </div>
      </div>
    `;
    container.appendChild(div);
  });
</script>

<?php
require('View/footer.php');
?>
