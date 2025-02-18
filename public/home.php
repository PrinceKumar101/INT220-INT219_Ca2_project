<Script>
    function alerting_user() {
        alert("Download feature not available yet. I am sorry");
    }
</Script>
<div class="min-h-screen bg-gradient-to-br from-slate-800 to-slate-900 flex flex-col w-full">
<h1 class="text-3xl bg-gradient-to-br from-slate-800 to-slate-900 p-8 text-center text-white/50  ">
    <?php
    echo "Hii there $name How are you doing today?";
    ?>
</h1>
<div class="min-h-screen bg-gradient-to-br from-slate-800 to-slate-900 p-8 flex justify-center ">

    <div class="bg-black/30 backdrop-blur-xl rounded-3xl p-8 w-full max-w-6xl text-white">
        <div class="flex gap-8">
            <div class="w-72 space-y-6">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-light">WeatherWise</h1>
                </div>

                <div class="bg-black/20 rounded-2xl p-4 space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400">Status</span>
                        <span class="text-sm">23.8%</span>
                    </div>
                    <div class="relative h-1 bg-gray-700 rounded-full overflow-hidden">
                        <div class="absolute top-0 left-0 h-full w-1/4 bg-gradient-to-r from-blue-400 to-orange-400"></div>
                    </div>
                    <div class="inline-block px-3 py-1 bg-white/10 rounded-full text-sm">
                        Dangerous
                    </div>
                    <button class="text-sm text-gray-400 flex items-center gap-1">
                        See More details <span class="ml-1">→</span>
                    </button>
                </div>

                <div>
                    <h3 class="text-sm text-gray-400 mb-4">Select Area</h3>
                    <div class="bg-black/20 rounded-2xl p-4 aspect-square flex items-center justify-center">
                        <i class="lucide-globe w-32 h-32 text-orange-400/60"></i>
                    </div>
                    <p class="text-center mt-2 text-sm">Brooklyn, New York, USA</p>
                </div>
            </div>

            <div class="flex-1 space-y-6">
                <div class="flex justify-between items-start">
                    <div>
                        <div class="flex items-center gap-2 text-gray-300 mb-4">
                            <span>Brooklyn, New York, USA</span>
                            <span class="text-sm">(Friday, January 4)</span>
                        </div>
                        <div class="flex items-start gap-8">
                            <h1 class="text-8xl font-light">13°</h1>
                            <div class="space-y-2 mt-2">
                                <div class="flex items-center gap-2 text-gray-300">
                                    <span class="w-4 h-0.5 bg-gray-500"></span>
                                    <span>29°</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-300">
                                    <span class="w-4 h-0.5 bg-gray-500"></span>
                                    <span>12°</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div>
                    <h2 class="text-5xl font-light text-gray-400">Stormy</h2>
                    <p class="text-3xl font-light text-gray-500">with partly cloudy</p>
                </div>

                <div class="mt-12">
                    <div class="flex justify-between items-end relative">
                        <div class="text-center">
                            <p class="text-sm text-gray-400 mb-4">Sunday</p>
                            <p class="text-2xl">28°</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-400 mb-4">Monday</p>
                            <p class="text-2xl">26°</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-400 mb-4">Tuesday</p>
                            <p class="text-2xl">27°</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-400 mb-4">Wednesday</p>
                            <p class="text-2xl">23°</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-400 mb-4">Thursday</p>
                            <p class="text-2xl">30°</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-400 mb-4">Friday</p>
                            <p class="text-2xl">25°</p>
                        </div>
                        <!-- Curve Line -->
                        <div class="absolute bottom-12 left-0 right-0 h-px bg-gradient-to-r from-transparent via-gray-500 to-transparent"></div>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-gray-400">Recently Searched</span>
                        <button class="text-sm flex items-center gap-1">
                            See All <span>→</span>
                        </button>
                    </div>
                    <div class="flex gap-4">
                        <div class="bg-black/20 p-4 rounded-2xl">
                            <div class="flex items-center gap-2">
                                <i class="lucide-sun w-5 h-5"></i>
                                <span>16°</span>
                            </div>
                            <p class="mt-2 text-sm">Liverpool, UK</p>
                            <p class="text-xs text-gray-400">Partly cloudy</p>
                        </div>
                        <div class="bg-black/20 p-4 rounded-2xl">
                            <div class="flex items-center gap-2">
                                <i class="lucide-cloud-rain w-5 h-5"></i>
                                <span>-2°</span>
                            </div>
                            <p class="mt-2 text-sm">Palermo, Italy</p>
                            <p class="text-xs text-gray-400">Rain/thunder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>