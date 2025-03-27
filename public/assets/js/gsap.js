gsap.from("#animated-text", {
    opacity: 0, 
    x: -50, 
    duration: 1, 
    ease: "power2.out", 
    delay: 0.5
  });
  
  gsap.from("#animated-subtext", {
    opacity: 0, 
    x: -30, 
    duration: 1, 
    ease: "power2.out", 
    delay: 1
  });
  
  // Subtle Glow Effect
  gsap.to("#animated-text", {
    textShadow: "0px 0px 10px rgba(255, 255, 255, 0.8)",
    repeat: -1, 
    yoyo: true, 
    duration: 1.5,
    ease: "power1.inOut"
  });
  
  
  
  // gsap.to("#main",{
  // backgroundColor:"#000",
  // scrollTrigger:{
  //   trigger:"#main",
  //   scroller:"body",
  //   markers:false,
  //   start:"top 60%",
  //   end:"top 30%",
  //   scrub:2,
  // }
  // })
  var cr = document.querySelector("#cursor")
  var blur = document.querySelector("#cursblur")
  document.addEventListener("mousemove",function(dets){
  cr.style.left=dets.x+"px"
  cr.style.top=dets.y+"px"
  blur.style.left=dets.x-150+"px"
  blur.style.top=dets.y-150+"px"
  
  
  })
  
  
  gsap.from("nav", {opacity: 0, y: -50, duration: 1, ease: "power2.out"});
  gsap.from(".nav-link", {opacity: 0, y: -20, duration: 0.8, stagger: 0.2, ease: "power2.out"});
  
  document.getElementById("menu-toggle").addEventListener("click", function() {
    let menu = document.getElementById("mobile-menu");
    if (menu.classList.contains("hidden")) {
        menu.classList.remove("hidden");
        gsap.from("#mobile-menu li", {opacity: 0, y: -20, duration: 0.5, stagger: 0.1});
    } else {
        gsap.to("#mobile-menu li", {opacity: 0, y: -20, duration: 0.3, stagger: 0.1, onComplete: function() {
            menu.classList.add("hidden");
        }});
    }
  });
  
  gsap.from("#animated-text", {opacity: 0, x: -50, duration: 1, ease: "power2.out"});
  gsap.from("#animated-subtext", {opacity: 0, x: -50, duration: 1, delay: 0.3, ease: "power2.out"});
  
  // GSAP Animation for text fade-in
  gsap.to("#textContent", { opacity: 1, duration: 1.5, ease: "power2.out" });
  
  
  var tl = gsap.timeline({
    scrollTrigger: {
      trigger: "h3", // Element to trigger the animation
      start: "top 80%", // When element enters viewport (80% from the top)
      toggleActions: "play none none none", // Play once
    }
  });
  
  tl.from("h3", {
    opacity: 0,
    y: -20,
    duration: 1,
  });
  
  tl.from("h1",{
    BackgroundColor:"green",
    opacity:0,
    // y:-20,
    scale:0,
    duration:1,
    delay:1,
  })
  
  
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
  