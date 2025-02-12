<div class="min-h-screen bg-gradient-to-br from-slate-800 to-slate-900 p-8 flex items-center justify-center">
        <div class="bg-black/30 backdrop-blur-xl rounded-3xl p-8 w-full max-w-md text-white">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="flex items-center justify-center gap-2 mb-2">
                    <i class="lucide-cloud-sun w-8 h-8 text-orange-400"></i>
                    <h1 class="text-2xl font-light">WeatherWise</h1>
                </div>
                <p class="text-gray-400">Sign in to access your weather dashboard</p>
            </div>

            <!-- Login Form -->
            <form class="space-y-6" method="post" action="login.php">
                <!-- Email Input -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm text-gray-400">Email</label>
                    <div class="relative">
                        <i class="lucide-mail absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 w-5 h-5"></i>
                        <input 
                            type="email" 
                            id="email" 
                            class="w-full bg-black/20 rounded-xl px-10 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter your email"
                        >
                    </div>
                </div>

                <!-- Password Input -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm text-gray-400">Password</label>
                    <div class="relative">
                        <i class="lucide-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 w-5 h-5"></i>
                        <input 
                            type="password" 
                            id="password" 
                            class="w-full bg-black/20 rounded-xl px-10 py-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Enter your password"
                        >
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" class="rounded bg-black/20 border-gray-600 text-blue-400 focus:ring-blue-400">
                        <span class="text-gray-400">Remember me</span>
                    </label>
                    <a href="#" class="text-blue-400 hover:text-blue-300">Forgot password?</a>
                </div>

                <!-- Login Button -->
                <button 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-blue-400 to-blue-500 text-white py-3 rounded-xl font-medium hover:from-blue-500 hover:to-blue-600 transition-colors"
                >
                    Sign In
                </button>

                <!-- Divider -->
                <div class="relative my-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-700"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-[#1a1f2d] text-gray-400">or continue with</span>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="grid grid-cols-2 gap-4">
                    <button class="flex items-center justify-center gap-2 bg-black/20 py-3 rounded-xl hover:bg-black/30 transition-colors">
                        <i class="lucide-github w-5 h-5"></i>
                        <span>GitHub</span>
                    </button>
                    <button class="flex items-center justify-center gap-2 bg-black/20 py-3 rounded-xl hover:bg-black/30 transition-colors">
                        <i class="lucide-google w-5 h-5"></i>
                        <span>Google</span>
                    </button>
                </div>

                <!-- Sign Up Link -->
                <p class="text-center text-gray-400 text-sm">
                    Don't have an account? 
                    <a href="#" class="text-blue-400 hover:text-blue-300">Sign up</a>
                </p>
            </form>
        </div>
    </div>