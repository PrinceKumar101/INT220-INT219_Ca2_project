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
  
  

  // Card Fade-In Animation
  
});
