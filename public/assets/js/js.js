document.addEventListener("DOMContentLoaded", () => {
  // FAQ Toggle Functionality using checkboxes
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach((item) => {
    const input = item.querySelector("input[type='checkbox']");
    const label = item.querySelector("label");

    label.addEventListener("click", () => {
      input.checked = !input.checked; // toggle open/close
    });
  });

  // "Show More" Toggle
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
  const slideCount = document.querySelectorAll(".slide").length;
  let currentIndex = 0;

  function slideNext() {
    currentIndex = (currentIndex + 1) % slideCount;
    if (slides) slides.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  if (slides) {
    setInterval(slideNext, 1500);
    slides.style.transform = `translateX(0%)`;
  }

  // Card fade-in animation
  const cards = document.querySelectorAll(".card");
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
});
