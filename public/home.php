<div class="bg-gray-100 h-screen group perspective-[800px]">
    
    <!-- <div id="cursor" class="h-[25px] w-[25px] bg-[#95C11E] rounded-full fixed z-50 opacity-50"></div>
    <div id="cursblur" class="h-[300px] w-[300px] bg-[#95C11E] rounded-full fixed z-40 blur-3xl opacity-30"></div> -->
    <section class="mt-4 relative w-full " >
      <div class="relative">
          <!-- Video Background -->
          <video src="https://www.agrivi.com/wp-content/uploads/2024/04/Header-Home.mp4" 
              class="w-full h-auto object-cover" autoplay muted loop playsinline>
          </video>
  
          <!-- Responsive Text Overlay -->
          <div class="absolute inset-0 flex items-center p-6 sm:p-12">
              <div class="bg-transparent text-left max-w-xs sm:max-w-md md:max-w-lg">
                  <h1 id="animated-text" 
                      class="text-white text-5xl font-extrabold tracking-wide leading-snug relative drop-shadow-lg">
                      Welcome to AgriNav
                  </h1>
                  <p id="animated-subtext" class="text-white mt-4 text-lg tracking-wide drop-shadow-md">
                      Your trusted guide for agricultural insights, weather forecasts, and expert farming advisory.
                  </p>
              </div>
          </div>
      </div>
    </section>

  <section class="bg-white" id="main">
    <h2 class="text-7xl text-gray-600 font-bold text-center mt-8 pt-8"><span class="font-extrabold">AgriNav</span> Connect</h2>
    <div class="flex justify-around mt-12 text-5xl text-green-800 mx-24">
      <div>
        <i class="fa-solid fa-wheat-awn"></i>
      </div>
      <div>
        <i class="fa-brands fa-connectdevelop"></i>
      </div>
      <div>
        <i class="fa-solid fa-tv"></i>
      </div>

    </div>
    <div class="bg-green-600 w-auto p-2 mt-12">
      <h2 class="text-white text-center text-2xl font-bold uppercase">Monitor All Your Data from One Place in Real-Time</h2>
      
    </div>
   



    <div class="bg-green-50 min-h-screen py-12">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Left Section: Content with Show More/Show Less -->
            <div class="md:w-1/2 p-6">
                <h2 class="text-2xl font-semibold text-green-700 mb-4">About Our Farming Solutions</h2>
                <p class="text-gray-600 mb-4">
                    Our platform offers innovative tools and resources to help farmers thrive in modern agriculture. 
                    From weather forecasts to crop recommendations, we’ve got you covered. Whether you're looking to 
                    improve productivity or adapt to changing climates, our solutions are designed with farmers in mind.
                </p>
                <p class="text-gray-600 mb-4">
                    We integrate cutting-edge technology with traditional farming wisdom to provide actionable insights. 
                    Our weather prediction tools use advanced algorithms to deliver precise forecasts, helping you plan 
                    planting and harvesting with confidence.
                </p>
                <div id="hiddenContent" class=" text-gray-600 mb-4">
                    <p class="mb-4">
                        We provide real-time data and expert advice tailored to your specific needs. Whether you’re a 
                        small-scale farmer or managing large fields, our solutions help optimize yields, reduce costs, 
                        and ensure sustainable practices. Join thousands of farmers who trust us to grow smarter every day.
                    </p>
                    <p class="mb-4">
                        Our crop recommendation system analyzes soil conditions, weather patterns, and market trends to 
                        suggest the best crops for your region. 
                    </p>
                    <p>
                        Sustainability is at the heart of what we do. We offer resources on organic farming, water conservation, 
                        and renewable energy options for farms. With our platform, you’re not just farming—you’re building a 
                        future for agriculture that’s resilient and eco-friendly.
                    </p>
                </div>
                <button id="toggleButton" class="md:hidden bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 transition-colors duration-300">
                    Show More
                </button>
            </div>
  
            <!-- Right Section: Image Slider -->
            <div class="md:w-1/2 bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="slider h-full">
                    <div class="slides">
                        <img src="crop1.jpg" 
                             alt="Crops" class="slide">
                        <img src="crop2.jpg" 
                             alt="Weather" class="slide">
                        <img src="farmer3.jpg" 
                             alt="Expert" class="slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

    



    <div class="bg-green-50 min-h-screen py-12">
      <div class="container mx-auto px-4">
          <!-- Header -->
          <div class="text-center mb-12">
              <h1 class="text-4xl font-bold text-green-800">Farming Solutions</h1>
              <p class="text-gray-600 mt-2">Your one-stop platform for modern agriculture</p>
          </div>
  
          <!-- Cards Section -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <!-- Weather Forecast Card -->
              <div class="card bg-white rounded-lg overflow-hidden fade-in" style="animation-delay: 0.1s;">
                  <div class="h-64 overflow-hidden">
                      <img src="weatherfor.jpg" 
                           alt="Weather" class="w-full h-full object-cover">
                  </div>
                  <div class="p-6">
                      <h3 class="text-xl font-semibold text-green-700 mb-2">Weather Forecast</h3>
                      <p class="text-gray-600 mb-4">Stay ahead with accurate weather predictions for your farm.</p>
                      <button class="weather-btn bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 transition-colors duration-300">
                          Check Forecast
                      </button>
                  </div>
              </div>
  
              <!-- Crop Recommendation Card -->
              <div class="card bg-white rounded-lg overflow-hidden fade-in" style="animation-delay: 0.2s;">
                  <div class="h-64 overflow-hidden">
                      <img src="croprec.jpg" 
                           alt="Crops" class="w-full h-full object-cover">
                  </div>
                  <div class="p-6">
                      <h3 class="text-xl font-semibold text-green-700 mb-2">Crop Recommendations</h3>
                      <p class="text-gray-600 mb-4">Get expert advice on the best crops for your land.</p>
                      <button class="crop-btn bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 transition-colors duration-300">
                          Get Advice
                      </button>
                  </div>
              </div>
  
              <!-- Expert Consultation Card -->
              <div class="card bg-white rounded-lg overflow-hidden fade-in" style="animation-delay: 0.3s;">
                  <div class="h-64 overflow-hidden">
                      <img src="expert.jpg" 
                           alt="Expert" class="w-full h-full object-cover">
                  </div>
                  <div class="p-6">
                      <h3 class="text-xl font-semibold text-green-700 mb-2">Talk to an Expert</h3>
                      <p class="text-gray-600 mb-4">Connect with agriculture specialists for guidance.</p>
                      <button class="expert-btn bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 transition-colors duration-300">
                          Start Chat
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>






    <div class="text-white min-h-screen flex justify-center items-center bg-gradient-to-b from-green-100 to-amber-50">
      <div class="container px-10 py-16 pl-32">
          <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start gap-10 lg:gap-20">
              <!-- Left Section (Title) -->
              <div id="faq-title" class="text-center lg:text-left w-full lg:w-1/3 opacity-0 animate-fade-in">
                  <h1 class="text-4xl font-bold text-green-800 mb-3">Farming FAQs That Matter</h1>
                  <p class="text-green-700 text-lg leading-relaxed pt-4">
                      Discover answers to common farming questions and learn how to grow with our platform. We're here to support your agricultural journey!
                  </p>
              </div>
  
              <!-- Right Section (Accordion) -->
              <div class="w-full lg:w-2/3">
                  <ul class="w-full max-w-2xl mx-auto space-y-6">
                      <!-- FAQ Item 1 -->
                      <li class="faq-item bg-white p-6 rounded-xl shadow-lg border border-green-200 transition-all hover:shadow-xl">
                          <input type="radio" name="acc" id="first" class="peer hidden">
                          <label for="first" class="flex justify-between items-center cursor-pointer text-lg font-semibold text-green-900">
                              <span class="flex items-center">
                                  <img src="https://img.icons8.com/ios-filled/24/15803C/wheat.png" alt="Crops Icon" class="mr-3">
                                  Crop Solutions
                              </span>
                              <span class="icon text-amber-600 transition-transform duration-300 peer-checked:rotate-45">+</span>
                          </label>
                          <div class="content overflow-hidden text-gray-600 max-h-0 peer-checked:max-h-40 transition-all duration-500">
                              <p class="p-3">Explore our range of seeds, fertilizers, and tools designed to boost your crop yield sustainably.</p>
                          </div>
                      </li>
  
                      <!-- FAQ Item 2 -->
                      <li class="faq-item bg-white p-6 rounded-xl shadow-lg border border-green-200 transition-all hover:shadow-xl">
                          <input type="radio" name="acc" id="second" class="peer hidden">
                          <label for="second" class="flex justify-between items-center cursor-pointer text-lg font-semibold text-green-900">
                              <span class="flex items-center">
                                  <img src="https://img.icons8.com/ios-filled/24/15803C/tractor.png" alt="Tractor Icon" class="mr-3">
                                  Farm Services
                              </span>
                              <span class="icon text-amber-600 transition-transform duration-300 peer-checked:rotate-45">+</span>
                          </label>
                          <div class="content overflow-hidden text-gray-600 max-h-0 peer-checked:max-h-40 transition-all duration-500">
                              <p class="p-3">From equipment rentals to soil testing, we provide services to keep your farm thriving.</p>
                          </div>
                      </li>
  
                      <!-- FAQ Item 3 -->
                      <li class="faq-item bg-white p-6 rounded-xl shadow-lg border border-green-200 transition-all hover:shadow-xl">
                          <input type="radio" name="acc" id="third" class="peer hidden">
                          <label for="third" class="flex justify-between items-center cursor-pointer text-lg font-semibold text-green-900">
                              <span class="flex items-center">
                                  <img src="https://img.icons8.com/ios-filled/24/15803C/support.png" alt="Support Icon" class="mr-3">
                                  Farmer Support
                              </span>
                              <span class="icon text-amber-600 transition-transform duration-300 peer-checked:rotate-45">+</span>
                          </label>
                          <div class="content overflow-hidden text-gray-600 max-h-0 peer-checked:max-h-40 transition-all duration-500">
                              <p class="p-3">Get expert advice, troubleshooting, and resources tailored to your farming needs.</p>
                          </div>
                      </li>
  
                      <!-- FAQ Item 4 -->
                      <li class="faq-item bg-white p-6 rounded-xl shadow-lg border border-green-200 transition-all hover:shadow-xl">
                          <input type="radio" name="acc" id="fourth" class="peer hidden">
                          <label for="fourth" class="flex justify-between items-center cursor-pointer text-lg font-semibold text-green-900">
                              <span class="flex items-center">
                                  <img src="https://img.icons8.com/ios-filled/24/15803C/phone.png" alt="Contact Icon" class="mr-3">
                                  Contact Us
                              </span>
                              <span class="icon text-amber-600 transition-transform duration-300 peer-checked:rotate-45">+</span>
                          </label>
                          <div class="content overflow-hidden text-gray-600 max-h-0 peer-checked:max-h-40 transition-all duration-500">
                              <p class="p-3">Reach out to our team for personalized assistance—your farm’s success is our priority!</p>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>










  <div id="scroller-1" class=" pt-4 font-bold inline-block whitespace-nowrap flex justify-center pb-8">
    <h1 class="inline-block text-black hover:text-white text-7xl text-center" style="-webkit-text-stroke: 3px white;">User Feedback</h1> 
    
  </div>
  <p class="text-center text-gray-400 font-bold text-xl pb-8">Hear from our amazing users and discover how GenpicAI has transformed their creative journeys.</p>




  < class="bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-semibold text-green-700 mb-8 text-center">What Our Farmers Say</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Feedback Card 1 -->
        <div class="bg-gray-50 rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center mb-4">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" 
                     alt="User 1" class="w-12 h-12 rounded-full mr-4 object-cover">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">John Miller</h3>
                    <p class="text-sm text-gray-500">Wheat Farmer</p>
                </div>
            </div>
            <p class="text-gray-600 italic">"The weather forecasts are spot-on! Helped me plan my planting perfectly."</p>
            <div class="mt-4 flex justify-end">
                <span class="text-yellow-400">★★★★★</span>
            </div>
        </div>

        <!-- Feedback Card 2 -->
        <div class="bg-gray-50 rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center mb-4">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" 
                     alt="User 2" class="w-12 h-12 rounded-full mr-4 object-cover">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Sarah Green</h3>
                    <p class="text-sm text-gray-500">Vegetable Grower</p>
                </div>
            </div>
            <p class="text-gray-600 italic">"Crop recommendations saved my season. I’m growing better produce now!"</p>
            <div class="mt-4 flex justify-end">
                <span class="text-yellow-400">★★★★☆</span>
            </div>
        </div>

        <!-- Feedback Card 3 -->
        <div class="bg-gray-50 rounded-lg p-6 shadow-md hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center mb-4">
                <img src="https://randomuser.me/api/portraits/men/75.jpg" 
                     alt="User 3" class="w-12 h-12 rounded-full mr-4 object-cover">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800">Robert Hayes</h3>
                    <p class="text-sm text-gray-500">Livestock Farmer</p>
                </div>
            </div>
            <p class="text-gray-600 italic">"Talking to experts gave me solutions I never thought of. Amazing support!"</p>
            <div class="mt-4 flex justify-end">
                <span class="text-yellow-400">★★★★★</span>
            </div>
        </div>
    </div>


  <hr class="border-black-50 mt-8">

  <footer class="bg-green-800 text-white pt-8">
    <div class="flex flex-col md:flex-row justify-center p-8 gap-12 md:gap-24 font-bold">
      <!-- Logo Section -->
      <div class="text-center md:text-left">
        <img src="agrilogo.jpg" alt="AgriNav Logo" class="h-[100px] w-[100px] rounded-full mx-auto md:mx-0 transition-transform duration-300 hover:scale-110 hover:rotate-6" id="footer-logo">
        <h3 class="font-bold p-4 text-2xl text-yellow-300">AgriNav</h3>
      </div>
  
      <!-- Links Section 1 -->
      <div class="flex flex-col text-white font-bold">
        <p class="p-2 transition-colors duration-300 hover:text-yellow-300 cursor-pointer relative group" data-tooltip="Learn about our mission">
          About Us
          <span class="absolute left-0 bottom-0 w-0 h-1 bg-yellow-300 transition-all duration-300 group-hover:w-full"></span>
        </p>
        <p class="p-2 transition-colors duration-300 hover:text-yellow-300 cursor-pointer relative group" data-tooltip="Get in touch">
          Contact Us
          <span class="absolute left-0 bottom-0 w-0 h-1 bg-yellow-300 transition-all duration-300 group-hover:w-full"></span>
        </p>
        <p class="p-2 transition-colors duration-300 hover:text-yellow-300 cursor-pointer relative group" data-tooltip="Explore our offerings">
          Services
          <span class="absolute left-0 bottom-0 w-0 h-1 bg-yellow-300 transition-all duration-300 group-hover:w-full"></span>
        </p>
        <p class="p-2 transition-colors duration-300 hover:text-yellow-300 cursor-pointer relative group" data-tooltip="Need help?">
          Support
          <span class="absolute left-0 bottom-0 w-0 h-1 bg-yellow-300 transition-all duration-300 group-hover:w-full"></span>
        </p>
      </div>
  
      <!-- Links Section 2 -->
      <div class="flex flex-col text-white font-bold">
        <p class="p-2 transition-colors duration-300 hover:text-yellow-300 cursor-pointer relative group" data-tooltip="Helpful farming guides">
          Resources
          <span class="absolute left-0 bottom-0 w-0 h-1 bg-yellow-300 transition-all duration-300 group-hover:w-full"></span>
        </p>
        <p class="p-2 transition-colors duration-300 hover:text-yellow-300 cursor-pointer relative group" data-tooltip="Check local weather">
          Weather Forecast
          <span class="absolute left-0 bottom-0 w-0 h-1 bg-yellow-300 transition-all duration-300 group-hover:w-full"></span>
        </p>
        <p class="p-2 transition-colors duration-300 hover:text-yellow-300 cursor-pointer relative group" data-tooltip="Expert farming tips">
          Farming Advisory
          <span class="absolute left-0 bottom-0 w-0 h-1 bg-yellow-300 transition-all duration-300 group-hover:w-full"></span>
        </p>
        <p class="p-2 transition-colors duration-300 hover:text-yellow-300 cursor-pointer relative group" data-tooltip="Best crops for your land">
          Crop Recommendation
          <span class="absolute left-0 bottom-0 w-0 h-1 bg-yellow-300 transition-all duration-300 group-hover:w-full"></span>
        </p>
      </div>
    </div>
  
    <!-- Social Icons -->
    <div class="flex justify-center gap-6 p-4 text-3xl">
      <a href="#" class="text-white hover:text-yellow-300 transition-all duration-300 transform hover:scale-125 hover:rotate-12">
        <i class="fa-brands fa-instagram icon"></i>
      </a>
      <a href="#" class="text-white hover:text-yellow-300 transition-all duration-300 transform hover:scale-125 hover:rotate-12">
        <i class="fa-brands fa-facebook icon"></i>
      </a>
      <a href="#" class="text-white hover:text-yellow-300 transition-all duration-300 transform hover:scale-125 hover:rotate-12">
        <i class="fa-brands fa-twitter icon"></i>
      </a>
      <a href="#" class="text-white hover:text-yellow-300 transition-all duration-300 transform hover:scale-125 hover:rotate-12">
        <i class="fa-brands fa-whatsapp icon"></i>
      </a>
    </div>
  
    <!-- Farming Tagline -->
    <div class="text-center mt-4">
      <p class="text-brown-200 text-sm animate-pulse">Growing Together for a Sustainable Future</p>
    </div>
  </footer>
  
  <!-- Tooltip Styles -->
  

  </section>
  
  
  <script src="gsap.js"></script>
  <script src="js.js"></script>
  

  
    






</div>
