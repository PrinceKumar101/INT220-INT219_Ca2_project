let images = [
  "./assets/images/farmer3.jpg",
  "./assets/images/crop1.jpg",
  "./assets/images/crop2.jpg",
  "./assets/images/ff1.jpg",
];
let index = 0;
const simg = document.getElementById("img");

function update() {
  gsap.to(simg, {
    opacity: 0,
    scale: 0.9,
    duration: 0.5,
    onComplete: () => {
      simg.src = images[index];
      gsap.to(simg, { opacity: 1, scale: 1, duration: 0.5 });
    },
  });
}

function next() {
  index = (index + 1) % images.length;
  update();
}

function prev() {
  index = (index - 1 + images.length) % images.length;
  update();
}

// Add Green Glow Effect on Click
// simg.addEventListener("click", () => {
//     gsap.to(simg, {
//         outline: "5px solid #95C11E",
//         boxShadow: "0px 0px 20px #95C11E",
//         duration: 0.3
//     });
// });

function show_faqs_answer(index) {
  const main_div = document.getElementById("faqs_main_div" + index);
  const arrow_key = document.getElementById("faqs_arrow_icon" + index);
  const answer = document.getElementById("faqs_ans" + index);
  main_div.classList.toggle("bg-orange-500");
  main_div.classList.toggle("text-white");
  main_div.classList.toggle("rounded-xl");
  // Toggle answer visibility
  answer.classList.toggle("hidden");

  // Rotate the arrow
  arrow_key.classList.toggle("-rotate-45");
}
