

document.addEventListener("DOMContentLoaded", function () {
  const burger = document.getElementById("burger");
  const mobileMenu = document.getElementById("mobileMenu");
  let isOpen = false;

  burger.addEventListener("click", function () {
    isOpen = !isOpen;
    mobileMenu.classList.toggle("hidden");
    burger.textContent = isOpen ? "✕" : "☰";
  });
});
