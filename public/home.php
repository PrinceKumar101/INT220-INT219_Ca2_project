<?php
$link = [
    ["Weather", "Get <br> Current Weather", "https://images.unsplash.com/photo-1534088568595-a066f410bcda?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8cmFpbnxlbnwwfHwwfHx8MA%3D%3D"],
    ["chatbot", "Talk <br> with our chatbot", "https://plus.unsplash.com/premium_photo-1682024745224-2edf92747598?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fGNoYXRib3R8ZW58MHx8MHx8fDA%3D"],
    ["experts", "Get <br> A Call from expert", "https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGV4cGVydHxlbnwwfHwwfHx8MA%3D%3D"]
];
$faqs = [
    [
        "How do smart irrigation systems save water?",
        "Don't drink water only Beer😒 Save Water Drink Beer.😎"
    ],
    [
        "How do smart irrigation systems save water?",
        "Don't drink water only Beer😒 Save Water Drink Beer.😎"
    ],
    [
        "How do smart irrigation systems save water?",
        "Don't drink water only Beer😒 Save Water Drink Beer.😎"
    ],
    [
        "How do smart irrigation systems save water?",
        "Don't drink water only Beer😒 Save Water Drink Beer.😎"
    ],
    [
        "How do smart irrigation systems save water?",
        "Don't drink water only Beer😒 Save Water Drink Beer.😎"
    ],
]
?>
<div class="w-full bg-white h-fit ">
    <section class="relative bg-white p-4 rounded-3xl h-screen overflow-hidden">
    <div class="absolute top-0 left-10 w-[70%] z-10 flex flex-row gap-10"
         data-speed="0.2">
        <h1 class="text-start flex gap-5 items-center leading-relaxed tracking-[4px]">
            <span class="text-orange-500 font-bold text-8xl md:text-9xl">Grow</span>
            <span class="text-black font-extrabold text-8xl md:text-[7rem]">With Us</span>
        </h1>
    </div>
    <div class="absolute right-10 top-15 md:top-[40%] w-84 text-right z-30 
    rounded-4xl opacity-75 backdrop-blur-3xl bg-white/20 border border-white/40 
    flex justify-center items-center p-5 flex-col shadow-lg"
         data-speed="0.3">
        <p class="text-gray-600 mb-5">
            Embrace the power of technology to revolutionize agriculture and promote sustainability.
        </p>
        <button class="bg-orange-500 text-white text-sm md:text-md w-fit p-5 px-7 rounded-full shadow-xl 
            hover:bg-orange-600 transition">
            Explore More →
        </button>
    </div>
    <div class="relative bottom-0 right-0 w-full h-full z-20 overflow-hidden">
        <img src="./assets/images/tractor_in_farm.png" alt="Tractor in farm"
             class="w-full object-cover rounded-3xl parallax-img" data-speed="0.1">
    </div>
</section>

    <section class="flex flex-col md:flex-row w-fit md:w-full mt-10 py-10 ml-10 justify-center items-center gap-10 ">

        <img src="./assets/images/farmer_with_wheat.png" alt="" class="scale-110">
        <p class="p-3 text-lg md:text-3xl w-7/10 font-light leading-10 text-wrap ">Our goal is to harness the power of technology to suppor growth in agriculture. By integrating advanced tools with awareness, we help farmers maximize productivity while resources for future generations.</p>
    </section>
    <section class="flex flex-row justify-around items-center flex-wrap-reverse gap-5">
        <?php


        foreach ($link as $items) {
            echo " 
            <div class='bg-orange-500/20 shadow-lg flex flex-col items-center text-center w-fit h-fit rounded-(--card-radius) p-(--card-padding) [--card-padding:--spacing(5)] [--card-radius:var(--radius-4xl)] cursor-pointer hover:scale-110 hover:bg-orange-500 hover:duration-400 hover:ease-in-out flex-wrap' role='button' onclick='gotoPage()' >
            <img src='{$items[2]}' alt='{$items[0]}' class='w-52 h-52 rounded-[calc(var(--card-radius)-var(--card-padding))] object-center object-cover' />
                <h1 class='text-xl font-bold text-gray-800'>{$items[0]}</h1>
                <p class='text-gray-600 mt-2'>{$items[1]}</p>
            </div>";
        }
        ?>



    </section>
    <section class="flex flex-col md:flex-row w-fit md:w-full mt-10 py-10 ml-10 justify-center items-center gap-10 ">
        <img src="./assets/images/two_farmers_in_field.png" alt="..." class="scale-110">
        <div class="p-3 md:text-3xl font-light capitalize">
            <h1 class="tracking-wider leading-20"><span class="text-orange-500 uppercase text-bold">optimizing</span> your farm</h1>
            <p class=" text-wrap md:w-9/10 leading-10">We provide innovative services that combine technology and experties to optimize every aspect of modern agriculture.</p>
        </div>
    </section>
    <section class="flex flex-col md:flex-row justify-start gap-10 p-2 items-center w-full text-lg md:text-2xl">
        <img src="./assets/images/tractor_cutting_crops.png" alt="..." class="w-fit">
        <div class="flex flex-col gap-2 justify-center items-center">
            <h1 class="font-semibold text-3xl md:text-4xl tracking-wider">
                Frequently Asked <br> Questions:
            </h1>
            <div class="flex flex-col gap-3 justify-center items-center flex-wrap ml-20 mr-20 w-full md:w-full">
                <?php
                foreach ($faqs as $index => $items) {
                    echo "<div class='flex flex-col gap-2 justify-center items-start p-4 pr-10 w-full md:w-full not-last:border-b border-orange-500 cursor-pointer' 
                            onclick='show_faqs_answer($index)' id='faqs_main_div$index'>
                        <div class='flex justify-between items-center w-full'>
                            <span class='font-medium'>" . ($index + 1) . ". $items[0] </span>
                            <span id='faqs_arrow_icon$index' 
                                  class='w-12 h-12 rounded-full flex items-center justify-center border border-dotted cursor-pointer transition-transform'>
                                    <img src='./assets/images/right-arrow.png' alt='A' class='object-center object-contain h-7 w-7 opacity-50'/>
                            </span>
                        </div>

                        <p id='faqs_ans$index' class='hidden w-4/10 break-words text-wrap mt-2'>
                            $items[1]
                        </p>
                      </div>";
                }
                ?>
            </div>
        </div>
    </section>






</div>
<script src="./assets/js/home.js"></script>