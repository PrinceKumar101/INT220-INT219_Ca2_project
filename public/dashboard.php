
<?php
$name=check_if_loggedIn()?$_SESSION['user']["name"]:"Guest";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
<div class="bg-gray-100">
    <div class="max-w-5xl mx-auto my-8 rounded-3xl overflow-hidden shadow-lg">
        <!-- Main container with background image -->
        <div class="relative bg-green-600 p-6 bg-cover bg-center" style="background-image: url(./assets/images/land1.jpg);">
            <!-- Top navigation -->
            <div class="flex justify-between items-center mb-16">
                <div class="flex space-x-2">
                   
                </div>
                <div class="flex items-center space-x-2">
                    <div class="bg-white rounded-full px-4 py-2 flex items-center">
                        <span><?= $name ?></span>
                    </div>
                
                </div>
            </div>
            
            <!-- Main content -->
            <div class="flex justify-between">
                <!-- Left side -->
                <div class="text-white">
                    <h1 class="text-7xl font-semibold mb-2">Part of future</h1>
                    <h1 class="text-7xl font-semibold mb-6">Agriculture</h1>
                    
                    
                </div>
                
                <!-- Right side - Rating card -->
                <div class="w-48 transform transition-transform duration-100 hover:scale-110">
                    <div class="bg-green-500 rounded-3xl p-4 text-white">
                        <h2 class="text-2xl font-bold">Weather</h2>
                        <p class="text-xs mb-2">Check weather in your city</p>
                        <div class="flex mb-3">
                            <img src="./assets/images/weather2.jpg" alt="Avatar" class="rounded-full -mr-2">
                           
                        </div>
                        <button class=" bg-white border border-gray-400 text-black rounded-full px-4 py-2 text-xs flex items-center mt-2 ml-[30px]">
                           <a href="index.php?page=windex"> <span>Explore Now</span></a>
                        </button>
                
                    </div>
                </div>
            </div>
            
            <!-- Product cards -->
            <div class="flex mt-16 space-x-4">
                <!-- Product card 1 -->
                <div class="bg-white rounded-3xl overflow-hidden flex-1 transform transition-transform duration-100 hover:scale-110">
                <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-bold">Talk to expert</h3>
                                <p class="text-xs text-gray-600">Connect with agriculture specialists for guidance and support</p>
                            </div>
                            
                        </div>
                        <div class="mt-4">
                            <img src="./assets/images/expert.jpg" alt="DJI Agras T50 Controller" class="w-full h-full object-contain rounded-3xl p-4">
                        </div>
                        <button class="border border-gray-400 text-black rounded-full px-4 py-2 text-xs flex items-center mt-2 ml-[85px]">
                           <a href="index.php?page=talk_to_exp"> <span>Explore Now</span></a>
                        </button>
                    </div>
                </div>
                
                <div class="bg-white rounded-3xl overflow-hidden flex-1 transform transition-transform duration-100 hover:scale-110">
                <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-bold">WeatherForecast</h3>
                                <p class="text-xs text-gray-600">Check weather in your area for better farming strategy</p>
                            </div>
                            
                        </div>
                        <div class="mt-4">
                            <img src="./assets/images/weatherfor.jpg" alt="DJI Agras T50 Controller" class="w-full h-full object-contain rounded-3xl p-4">
                        </div>
                        <button class="border border-gray-400 text-black rounded-full px-4 py-2 text-xs flex items-center mt-2 ml-[85px]">
                            <a href="index.php?page=weather"><span>Explore Now</span></a>
                        </button>
                    </div>
                </div>
                
                <!-- Product card 2 -->
                <div class="bg-white rounded-3xl overflow-hidden flex-1 transform transition-transform duration-100 hover:scale-110">
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="font-bold">Community form</h3>
                                <p class="text-xs text-gray-600">Connect with world and share your expiernce and problems</p>
                            </div>
                            
                        </div>
                        <div class="mt-4">
                            <img src="./assets/images/croprec.jpg" alt="DJI Agras T50 Controller" class="w-full h-full object-contain rounded-3xl p-4">
                        </div>
                        <button class="border border-gray-400 text-black rounded-full px-4 py-2 text-xs flex items-center mt-2 ml-[85px]">
                            <a href="index.php?page=community_forum"><span>Explore Now</span><a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
