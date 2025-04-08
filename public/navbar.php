<?php
$nav_links = ["Home" => "home", "About" => "about", "Weather" => "weather", "Contact" => "contact", "Sign In" => "login"];
$nav_links_iflogged = ["Home" => "home", "About" => "about", "Weather" => "weather", "Contact" => "contact", "Farming Advisory" => "farming_advisory", "Dashboard" => "dashboard", "Expert_talk" => "talk_to_expert"];
$isLoggedIn = (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]["status"]) ? $_SESSION["loggedIn"]["status"] : false;

$user = ($isLoggedIn && isset($_SESSION["user"]) && $_SESSION["user"]["status"]) ? $_SESSION["user"] : null;



?>
<nav class="w-full z-50 text-lg bg-inherit text-inherit 
    [--primary-color:var(--color-green-500)] 
    [--primary-text-color:var(--color-green-700)] 
    ">
    
    <div class="flex items-center justify-between p-4">
        <a href="#" class="text-3xl font-bold ml-2 sm:ml-10 text-(--primary-color)">AgriNav</a>

        <button class="md:hidden text-(--primary-color) focus:outline-none text-3xl px-3" id="burger">
            ☰
        </button>

        <ul class="hidden md:flex md:space-x-4 gap-3 menu">
            <?php
            foreach (($isLoggedIn ? $nav_links_iflogged : $nav_links) as $items => $items_link) {
                echo "
                <li class='hover:scale-105 rounded-lg cursor-pointer' id='$items'>
                    <div class='relative p-1 rounded bg-transparent backdrop:blur-2xl'>
                        <a href='?page=$items_link' class='capitalize hover:duration-300 " . (($page == $items_link) ? 'text-(--primary-text-color) p-1 hover:scale-105 hover:text-(--primary-text-color) underline underline-offset-6' : 'hover:text-gray-400') . "'>
                            <span class='absolute inset-0'></span>
                            $items
                        </a>
                    </div>
                </li>
                ";
            }

            if ($isLoggedIn) {
                echo "
                <li class='hover:scale-105 rounded-lg cursor-pointer' id='logout'>
                    <div class='relative p-1 rounded bg-transparent backdrop:blur-2xl'>
                        <a id='logout_a' href='../backend/auth/logout.php' class='capitalize hover:duration-300 hover:text-(--primary-text-color) active:text-[var(--primary-hover-color)]'>
                            <span class='absolute inset-0'></span>
                            Logout
                        </a>
                    </div>
                </li>
                ";
            }
            ?>
        </ul>
    </div>

    <ul id="mobileMenu" class="md:hidden hidden flex-col px-6 py-4 space-y-3 text-base bg-[rgba(255,255,255,0.8)] backdrop-blur-xl rounded-b-xl shadow-md transition-all duration-300 ease-in-out">
        <?php
        foreach (($isLoggedIn ? $nav_links_iflogged : $nav_links) as $items => $items_link) {
            echo "
            <li>
                <a href='?page=$items_link' class='block py-2 px-3 rounded-lg capitalize hover:bg-[color:var(--primary-color)/0.1] hover:text-(--primary-text-color) " . (($page == $items_link) ? 'text-(--primary-text-color) underline underline-offset-4' : '') . "'>
                    $items
                </a>
            </li>
            ";
        }

        if ($isLoggedIn) {
            echo "
            <li>
                <a href='../backend/auth/logout.php' class='block py-2 px-3 rounded-lg capitalize hover:bg-[color:var(--primary-color)/0.1] hover:text-(--primary-text-color)'>
                    Logout
                </a>
            </li>
            ";
        }
        ?>
    </ul>
</nav>


<script src="./assets/js/navbar.js"></script>