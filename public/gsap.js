












document.querySelectorAll(".faq-item").forEach(item => {
  let input = item.querySelector("input");
  let content = item.querySelector(".content");
  let icon = item.querySelector(".icon");

  input.addEventListener("change", () => {
      document.querySelectorAll(".faq-item").forEach(otherItem => {
          let otherContent = otherItem.querySelector(".content");
          let otherIcon = otherItem.querySelector(".icon");

          if (otherItem !== item) {
              gsap.to(otherContent, { height: 0, duration: 0.3 });
              otherIcon.textContent = "+";
          }
      });

      if (input.checked) {
          let fullHeight = content.scrollHeight;
          gsap.to(content, { height: fullHeight, duration: 0.3 });
          icon.textContent = "−";
      } else {
          gsap.to(content, { height: 0, duration: 0.3 });
          icon.textContent = "+";
      }
  });
});

document.addEventListener("DOMContentLoaded", () => {
  gsap.fromTo("#faq-title", 
      { opacity: 0, y: 50 },
      { opacity: 1, y: 0, duration: 1, ease: "power2.out", scrollTrigger: "#faq-title" }
  );
});


document.querySelectorAll(".icon").forEach(icon => {
  icon.addEventListener("mouseenter", () => {
    gsap.to(icon, { scale: 1.3, duration: 0.3 });
  });
  icon.addEventListener("mouseleave", () => {
    gsap.to(icon, { scale: 1, duration: 0.3 });
  });
});

gsap.from("p", { 
  opacity: 0, 
  x: -50, 
  duration: 1, 
  stagger: 0.2 
});


//footer animation
gsap.from("#footer-logo", {
  opacity: 0,
  scale: 0,
  duration: 1,
  ease: "elastic.out(1, 0.5)",
  scrollTrigger: {
    trigger: "footer",
    start: "top 90%",
    toggleActions: "play none none none"
  }
});

gsap.from("footer .flex > div", {
  opacity: 0,
  y: 50,
  duration: 1,
  stagger: 0.2,
  ease: "power2.out",
  scrollTrigger: {
    trigger: "footer",
    start: "top 90%",
    toggleActions: "play none none none"
  }
});

gsap.from("footer .icon", {
  opacity: 0,
  scale: 0,
  duration: 0.8,
  stagger: 0.1,
  ease: "back.out(1.7)",
  scrollTrigger: {
    trigger: "footer",
    start: "top 90%",
    toggleActions: "play none none none"
  }
});

gsap.from("footer p.animate-pulse", {
  opacity: 0,
  duration: 1.5,
  delay: 1,
  ease: "power2.in",
  scrollTrigger: {
    trigger: "footer",
    start: "top 90%",
    toggleActions: "play none none none"
  }
});
