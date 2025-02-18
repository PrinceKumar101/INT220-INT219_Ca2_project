
<nav class="bg-gray-800 text-white">
    <div class="container mx-auto flex items-center justify-between p-4">
        <a href="#" class="text-xl font-bold">Brand</a>

        <button class="md:hidden burger text-white focus:outline-none">
            ☰
        </button>

        <ul class="hidden md:flex space-x-4 menu">
            <li><a href="?page=home" class="hover:text-gray-300 <?= ($page == 'home') ? 'text-rose-500 scale-105 p-2 hover:scale-105 hover:text-rose-500' : ''; ?>">Home</a></li>
            <li><a href="?page=about" class="hover:text-gray-300 <?= ($page == 'about') ? 'text-rose-500 scale-105 p-2 hover:scale-105 hover:text-rose-500' : ''; ?>">About</a></li>
            <li><a href="?page=dashboard" class="hover:text-gray-300 <?= ($page == 'dashboard') ? 'text-rose-500 scale-105 p-2 hover:scale-105 hover:text-rose-500' : ''; ?>">Dashboard</a></li>
            <li><a href="?page=contact" class="hover:text-gray-300 <?= ($page == 'contact') ? 'text-rose-500 scale-105 p-2 hover:scale-105 hover:text-rose-500' : ''; ?>">Contact</a></li>
            <li><a href="?page=login" class="hover:text-gray-300 <?= ($page == 'login') ? 'text-rose-500 scale-105 p-2 hover:scale-105 hover:text-rose-500' : ''; ?>">Login</a></li>
        </ul>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Burger Menu Toggle
        const burger = document.querySelector('.burger');
        const menu = document.querySelector('.menu');

        burger.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });

        
    });
</script>

