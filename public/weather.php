<?php
include_once "../backend/weather_curl.php";

?>
<div>


    <div class="bg-inhert flex flex-col w-full text-2xl h-fit p-5">
        <div class=" bg-inhert p-4 md:p-8 flex justify-center">
            <div class="bg-[url(https://images.unsplash.com/photo-1531604250646-2f0e818c4f06?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHN1bnNldHxlbnwwfHwwfHx8MA%3D%3D)] bg-no-repeat bg-center bg-cover rounded-3xl p-4 md:p-5 w-full max-w-6xl text-gray-700 relative overflow-hidden">
                <div class="absolute inset-0 bg-white/80 backdrop-blur-sm"></div>
                <div class="relative flex flex-col-reverse md:flex-row gap-6 md:gap-8">
                    <div class="w-full md:w-72 space-y-6">
                        <div class="bg-white/80 rounded-2xl p-4 space-y-4 shadow-sm">
                            <h1 class="uppercase tracking-wider bg-gradient-to-r from-blue-600 to-blue-400 bg-clip-text w-fit text-xl">
                                <span class="text-transparent">Status</span>
                            </h1>
                            <div class="flex justify-between items-center">
                                <span>Wind speed</span>
                                <span class="text-sm"><?= $wind_speed ?? "N/A" ?> kmph</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Humidity</span>
                                <span class="text-sm"><?= $humidity ?? "N/A" ?></span>
                            </div>
                        </div>
                        <form action="../backend/find_location.php" method="post" onsubmit="submitValidate()" class="flex flex-col gap-3 w-full">
                            <section class="flex flex-col space-y-1">
                                <label for="latitude" class="text-gray-700 font-normal">Latitude</label>
                                <input
                                    type="text"
                                    id="latitude"
                                    name="latitude"
                                    class=" w-7/10 md:w-full p-1.5 md:p-2 rounded-md bg-white border border-gray-300 text-gray-800 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none">
                            </section>
                            <section class="flex flex-col space-y-1">
                                <label for="longitude" class="text-gray-700 font-normal">Longitude</label>
                                <input
                                    type="text"
                                    id="longitude"
                                    name="longitude"
                                    class=" w-7/10 md:w-full p-1.5 md:p-2 rounded-md bg-white border border-gray-300 text-gray-800 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none">
                            </section>
                            <p class="text-2xl font-semibold text-center">Or</p>

                            <section class="flex flex-col space-y-1">
                                <label for="city" class="text-gray-700 font-normal">City</label>
                                <input
                                    type="text"
                                    id="city"
                                    name="city"
                                    class=" w-7/10 md:w-full p-1.5 md:p-2 rounded-md bg-white border border-gray-300 text-gray-800 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 outline-none">
                            </section>
                            <button type="submit"
                                class="bg-blue-500 text-white px-3 py-2 rounded-md hover:bg-blue-600 transition">
                                Submit
                            </button>
                        </form>


                    </div>
                    <div class="flex-1 space-y-6">
                        <div>
                            <div class="flex flex-col md:flex-row justify-between items-start">
                                <div>
                                    <div class="flex flex-wrap items-center gap-2 text-gray-700 mb-4">
                                        <span id="current_location" class="capitalize">

                                            <?= $location_from_api ?? "Brooklyn, New York, USA" ?>
                                        </span>
                                        <span class="text-sm" id="current_day"><?= date("l") ?></span>
                                    </div>
                                    <div class="flex flex-wrap md:flex-row gap-4 md:gap-8 justify-center items-center">
                                        <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center">
                                            <i data-lucide="sun" class="w-16 h-16 text-blue-600"></i>
                                        </div>
                                        <h1 class="text-5xl md:text-6xl font-light text-blue-900" id="current_temp">
                                            <?= current_temp($res) ?>
                                        </h1>
                                        <div class="mt-2 grid grid-cols-2 md:grid-cols-1 gap-2 justify-center items-center">
                                            <div class="flex justify-center items-center gap-2 text-gray-700">
                                                <span class="w-4 h-0.5 bg-blue-200"></span>
                                                <span id="current_max_temp"><?= $max_temp ?? "26°" ?></span>
                                            </div>
                                            <div class="flex justify-center items-center gap-2 text-gray-700">
                                                <span class="w-4 h-0.5 bg-blue-200"></span>
                                                <span id="current_min_temp"><?= $min_temp ?? "18°" ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-4xl md:text-5xl font-light text-blue-800"><?= $current_weather ?? "N/A"  ?></h2>
                            <p class="text-2xl md:text-3xl font-light text-blue-600"><?= $current_weather_description ?? "N/A"  ?></p>
                        </div>
                        <div class="mt-12">
                            <div class="flex flex-wrap justify-center items-center relative gap-3">
                                <?php foreach ($days as $key => $value): ?>
                                    <div class='text-center w-fit px-5'>
                                        <p class='text-sm text-gray-400 mb-4 capitalize'><?= $value ?></p>
                                        <p class='text-lg md:text-xl'>
                                            <?= isset($res->list[$key]->temp->day) ? round($res->list[$key]->temp->day) : 'N/A' ?>°
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                                <div class="absolute hidden md:flex bottom-10 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent"></div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <div class="flex justify-between items-center mb-4">
                                <span class="text-gray-700">Recently Searched</span>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white/80 p-4 rounded-2xl shadow-sm">
                                    <div class="flex items-center gap-2 text-blue-700">
                                        <i data-lucide="sun" class="w-5 h-5"></i>
                                        <span>16°</span>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-800">Liverpool, UK</p>
                                    <p class="text-xs text-gray-600">Partly cloudy</p>
                                </div>
                                <div class="bg-white/80 p-4 rounded-2xl shadow-sm">
                                    <div class="flex items-center gap-2 text-blue-700">
                                        <i data-lucide="cloud-rain" class="w-5 h-5"></i>
                                        <span>-2°</span>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-800">Palermo, Italy</p>
                                    <p class="text-xs text-gray-600">Rain/thunder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        function submitValidate(event) {
            event.preventDefault();
            const latitude = document.getElementById("latitude").value.trim();
            const longitude = document.getElementById("longitude").value.trim();
            const city = document.getElementById("city").value.trim();

            if ((latitude && longitude && city) || (!latitude && !longitude && !city)) {
                alert("Please enter either Latitude & Longitude or a City name.");
                return false;
            }
            return true;
        }

        document.querySelector("form").addEventListener("submit", submitValidate);
    </script>
</div>

<script src="./assets/js/weather.js"></script>