<div id="customAlert" class="fixed top-30  transform-translate-x-1/2 bg-gray-800 text-white p-4 rounded shadow-lg hidden text-3xl ">
    Hey, this is the login page <br> Wanna Login ....
</div>

<!-- <script>
    const alertBox = document.getElementById("customAlert");
    alertBox.classList.remove("hidden"); // Show the alert

    setTimeout(() => {
        alertBox.classList.add("hidden"); // Hide after 1 sec
    }, 5000);
</script> -->
<div class="bg-black text-white flex flex-col md:flex-row h-full w-full">
    <div class="flex flex-col justify-center items-center space-x-4 space-y-4 m-22 md:w-1/2">
        <p class="text-5xl font-semibold bg-clip-text text-transparent bg-radial from-white to-zinc-900">LOGIN NOW</p>
        <p class="text-zinc-600 p-4 font-semibold text-center">For quick access to your account, log in now using your email and password. We're here to assist you!</p>
    </div>
    <div class="md:w-1/2 md:items-center md:justify-center flex flex-col items-center m-22">
        <form action="" method="post" class="p-6 space-y-6 space-x-6 w-full rounded-xl bg-white/10 backdrop-blur-lg border border-white/20 shadow-lg md:w-full">
            <label for="username">Name</label><br>
            <input type="text" id="username" name="id" class=" mt-2 w-full bg-black rounded-md h-12"><br>
            <label for="pwd">Password</label><br>
            <input type="password" name="pwd" id="pwd" class=" mt-2 w-full bg-black rounded-md h-12"><br>
            <a href="" class="text-sm text-zinc-400">new user?</a><br>
            <button type="submit" class="mt-4 w-full bg-radial to-purple-900 from-zinc-400 rounded-full p-2 h-12 hover:from-purple-900 hover:to-purple-900" >Login</button> <br>
        </form>
    </div>
</div>