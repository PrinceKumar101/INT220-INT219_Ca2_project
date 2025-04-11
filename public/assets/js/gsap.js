document.addEventListener("DOMContentLoaded", () => {
  const toggleButton = document.getElementById("toggleButton");
  const hiddenContent = document.getElementById("hiddenContent");

  if (toggleButton && hiddenContent) {
    toggleButton.addEventListener("click", () => {
      hiddenContent.classList.toggle("hidden-content");
      toggleButton.textContent = hiddenContent.classList.contains("hidden-content")
        ? "Show More"
        : "Show Less";
    });
  }

  // Image Slider Functionality
  const slides = document.querySelector(".slides");
  const slideItems = document.querySelectorAll(".slide");
  let currentIndex = 0;
  const slideCount = slideItems.length;

  if (slides && slideCount > 1) {
    function slideNext() {
      currentIndex = (currentIndex + 1) % slideCount;
      slides.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    setInterval(slideNext, 3000); // Change slide every 3 seconds
    slides.style.transform = `translateX(0%)`;
  }

  // Footer Animations
  const weatherBtn = document.querySelector(".weather-btn");
  const cropBtn = document.querySelector(".crop-btn");
  const expertBtn = document.querySelector(".expert-btn");

  if (weatherBtn && cropBtn && expertBtn) {
    weatherBtn.addEventListener("click", () => {
      alert("Showing weather forecast for your area!");
    });

    cropBtn.addEventListener("click", () => {
      alert("Generating crop recommendations based on your location!");
    });

    expertBtn.addEventListener("click", () => {
      alert("Connecting you to a farming expert!");
    });
  }

  // Card Fade-In Animation
  const cards = document.querySelectorAll(".card");
  if (cards.length) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("fade-in");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1 }
    );

    cards.forEach((card) => observer.observe(card));
  }
});
