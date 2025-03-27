<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://kit.fontawesome.com/95e0896bea.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
    integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div>
    <section class="mt-4 relative w-full ">
        <div class="relative">
            <!-- Video Background -->
            <video src="https://www.agrivi.com/wp-content/uploads/2024/04/Header-Home.mp4" class="w-full h-auto object-cover"
                autoplay muted loop playsinline>
            </video>

            <!-- Responsive Text Overlay -->
            <div class="absolute inset-0 flex items-center p-6 sm:p-12">
                <div class="bg-inherit text-left max-w-xs sm:max-w-md md:max-w-lg">
                    <h1 id="animated-text"
                        class="text-white text-lg md:text-5xl font-extrabold tracking-wide leading-snug relative drop-shadow-lg">
                        Welcome to AgriNav
                    </h1>
                    <p id="animated-subtext" class="text-white mt-4 text-xs md:text-lg tracking-wide drop-shadow-md text-wrap">
                        Your trusted guide for agricultural insights, weather forecasts, and expert farming advisory.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h1 class="text-4xl text-gray-600 font-bold text-center mt-8 pt-8"><span class="font-extrabold">AgriNav</span>
            Connect</h1>
        <div class="flex justify-around mt-12 text-5xl text-green-800 mx-24">
            <i class="fa-solid fa-wheat-awn"></i>

            <i class="fa-brands fa-connectdevelop"></i>

            <i class="fa-solid fa-tv"></i>

        </div>
        <div class="bg-green-600 mx-24 w-auto p-2 mt-12">
            <h2 class="text-white text-center text-2xl font-bold uppercase">Monitor All Your Data from One Place in Real-Time
            </h2>
        </div>

    </section>
    <section>
        <div class="pb-24 border-b border-gray-500 mt-16  flex flex-row justify-center items-center gap-8">
            <div class="  mt-16 flex flex-col self-start">
                <div class="text-inherit bg-inherit whitespace-nowrap uppercase overflow-x-auto overflow-y-hidden relative">
                    <div id="scroller-1" class="font-bold inline-block whitespace-nowrap text-4xl">
                        <h3 class="inline-block text-inherit">About us
                        </h3>

                    </div>
                </div>
                <p class="pt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum dolorem<br> reprehenderit
                    laboriosam beatae aperiam consectetur cupiditate aut<br>, aliquam neque vel cum fugiat odio voluptas veritatis
                    velit <br>voluptatum ipsum totam. Error!lorem20 Lorem ipsum dolor sit,<br> amet consectetur adipisicing elit.

                </p>
                <button class="mt-8 px-4 py-2 w-52 bg-cyan-500 cursor-pointer">Show More</button>
            </div>

            <div class="m-6">
                <img id="img" src="./assets/images/ff1.jpg" class="h-full w-full rounded-lg shadow-lg">
                <div class="flex justify-center space-x-4 mt-4">
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full text-white bg-[#95C11E] shadow-lg hover:scale-110 transition-transform font-bold"
                        onclick="prev()">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button
                        class="w-10 h-10 flex items-center justify-center rounded-full text-white bg-[#95C11E] shadow-lg hover:scale-110 transition-transform font-bold"
                        onclick="next()">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>
</div>
<script src="./assets/js/home.js"></script>
<script src="./assets/js/gsap.js"></script>