document.addEventListener("DOMContentLoaded", function () {
    function animateIfExists(selector, animation) {
        const element = document.querySelector(selector);
        if (element) {
            gsap.from(selector, animation);
        }
    }

    animateIfExists("#footer-logo", { opacity: 0, y: 50, duration: 1 });
    animateIfExists("footer .flex > div", { opacity: 0, y: 30, duration: 1, stagger: 0.2 });
    animateIfExists("footer .icon", { scale: 0, duration: 0.5, stagger: 0.1 });
    animateIfExists("footer p.animate-pulse", { opacity: 0, duration: 1, repeat: -1, yoyo: true });

    if (typeof ScrollTrigger !== "undefined") {
        ScrollTrigger.refresh();
    }
});