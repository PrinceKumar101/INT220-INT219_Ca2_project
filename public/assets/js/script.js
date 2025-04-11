document.addEventListener('DOMContentLoaded', () => {
  const headers = document.querySelectorAll('.accordion-header');

  headers.forEach(header => {
      header.addEventListener('click', () => {
          const content = header.nextElementSibling;
          const icon = header.querySelector('.icon');
          const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

          if (isOpen) {
              // Close the accordion
              content.style.maxHeight = '0px';
              icon.textContent = '+';
              icon.style.transform = 'rotate(0deg)';
          } else {
              // Open the accordion
              content.style.maxHeight = content.scrollHeight + 'px';
              icon.textContent = '-';
              // icon.style.transform = 'rotate(45deg)';
          }
      });
  });


  const slides = document.querySelector(".slides");
  const slideCount = document.querySelectorAll(".slide").length;
  let currentIndex = 0;

  function slideNext() {
    currentIndex = (currentIndex + 1) % slideCount;
    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  // Auto-slide every 12 seconds
  setInterval(slideNext, 1500);

  // Initial position
  slides.style.transform = `translateX(0%)`;

});