<div id="customAlert" class="fixed top-30  transform-translate-x-1/2 bg-gray-800 text-white p-4 rounded shadow-lg hidden text-3xl ">
    Hey, this is the login page <br> Wanna Login ....
</div>

<script>
    const alertBox = document.getElementById("customAlert");
    alertBox.classList.remove("hidden"); // Show the alert

    setTimeout(() => {
        alertBox.classList.add("hidden"); // Hide after 1 sec
    }, 5000);
</script>
<div class="text-3xl text-center">

    <p>
        This is a Login page.
    </p>
</div>