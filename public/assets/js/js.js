
document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggleButton');
    const hiddenContent = document.getElementById('hiddenContent');
  
    toggleButton.addEventListener('click', () => {
        if (hiddenContent.classList.contains('hidden-content')) {
            hiddenContent.classList.remove('hidden-content');
            toggleButton.textContent = 'Show Less';
        } else {
            hiddenContent.classList.add('hidden-content');
            toggleButton.textContent = 'Show More';
        }
    });
  
    // Image Slider Functionality
    const slides = document.querySelector('.slides');
    const slideCount = document.querySelectorAll('.slide').length;
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
  
  
  // Footer Animations
  
  //mes features anim
  document.addEventListener('DOMContentLoaded', () => {
    const weatherBtn = document.querySelector('.weather-btn');
    const cropBtn = document.querySelector('.crop-btn');
    const expertBtn = document.querySelector('.expert-btn');
  
    weatherBtn.addEventListener('click', () => {
        alert('Showing weather forecast for your area!');
    });
  
    cropBtn.addEventListener('click', () => {
        alert('Generating crop recommendations based on your location!');
    });
  
    expertBtn.addEventListener('click', () => {
        alert('Connecting you to a farming expert!');
    });
  
    // Add fade-in effect when cards come into view
    const cards = document.querySelectorAll('.card');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
  
    cards.forEach(card => observer.observe(card));
  });