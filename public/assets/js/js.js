document.addEventListener("DOMContentLoaded", () => {
  // FAQ Toggle Functionality
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach((item) => {
    const label = item.querySelector("label");
    const content = item.querySelector(".content");
    const icon = item.querySelector(".icon");

    label.addEventListener("click", () => {
      const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

      // Close all items (accordion behavior)
      faqItems.forEach((otherItem) => {
        const otherContent = otherItem.querySelector(".content");
        const otherIcon = otherItem.querySelector(".icon");
        if (otherContent !== content) {
          otherContent.style.maxHeight = "0px";
          otherIcon.style.transform = "rotate(0deg)";
        }
      });

      // Toggle the clicked item
      if (isOpen) {
        content.style.maxHeight = "0px";
        icon.style.transform = "rotate(0deg)";
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        icon.style.transform = "rotate(45deg)";
      }
    });
  });

  // Optional: Add default styles to all .content divs
  document.querySelectorAll(".content").forEach((el) => {
    el.style.overflow = "hidden";
    el.style.transition = "max-height 0.4s ease";
    el.style.maxHeight = "0px";
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
