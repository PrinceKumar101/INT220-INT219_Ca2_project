<div class="font-sans text-gray-700">
    <!-- Hero Section -->
    <section class="w-screen h-[20rem] bg-[url('./assets/images/contact_us.jpg')] bg-cover bg-center bg-no-repeat flex items-center justify-center text-white text-center ">
        <h1 class="text-6xl font-bold drop-shadow-lg">Contact Us</h1>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6 flex flex-col md:flex-row justify-between gap-8 mt-8">
        <!-- Left Section -->
        <div class="md:w-1/2 ">
            <h2 class="text-3xl font-bold mb-4">Let's Start a Conversation</h2>
            <h3 class="text-lg font-medium mb-2">Ask how we can support your farming journey:</h3>
            <p class="mb-4">Discover how AgriNav helps farmers stay updated with local weather, get expert advice for their crops, and connect with fellow farmers in our community forum — all in one easy-to-use platform.</p>
            <h3 class="text-lg font-medium mb-2">Join the AgriNav Family</h3>
            <p class="mb-4">Discover how we support rural communities, promote sustainable farming practices, and offer opportunities to collaborate and grow together.</p>
            <h3 class="text-lg font-medium mb-2">Contact Information</h3>
            <p class="mb-2"><strong>India | AgriNav Headquarters</strong><br>Block 34, Lovely Professional University,<br>Jalandhar - Delhi G.T. Road, Phagwara, Punjab – 144411</p>
            <p class="mb-2"><strong>Farmer Helpline</strong><br>+91 98765 43210</p>
            <p class="mb-2"><strong>Support & General Inquiries</strong><br><a href="mailto:support@agrinav.in" class="text-green-700 hover:underline">support@agrinav.in</a></p>
            <p class="mb-2"><strong>Feedback & Suggestions</strong><br><a href="mailto:feedback@agrinav.in" class="text-green-700 hover:underline">feedback@agrinav.in</a></p>
        </div>

        <!-- Right Section (Form) -->
        <div class="md:w-1/2">
            <h2 class="text-xl font-semibold mb-4">Please note: all fields are required</h2>
            <form id="contact-form" action="../backend/contact/contactdata.php" method="POST" class="space-y-4">
                <div>
                    <label class="block text-gray-500">Full Name</label>
                    <input type="text" name="full_name" class="w-full p-2 border rounded" required>
                </div>
                <div>
                    <label class="block text-gray-500">Phone Number</label>
                    <input type="text" name="phno" class="w-full p-2 border rounded" required>
                </div>
                <div>
                    <label class="block text-gray-500">Village / Area Name</label>
                    <input type="text" name="village" class="w-full p-2 border rounded" required>
                </div>
                <div>
                    <label class="block text-gray-500">State</label>
                    <input type="text" name="state" class="w-full p-2 border rounded" required>
                </div>
                <div>
                    <label class="block text-gray-500">District</label>
                    <input type="text" name="district" class="w-full p-2 border rounded" required>
                </div>
                <div>
                    <label class="block text-gray-500">Type of Help Needed</label>
                    <select class="w-full p-2 border rounded" name="help_type" required>
                        <option value="" disabled selected>Select</option>
                        <option value="Crop Price">Crop Price</option>
                        <option value="Selling Crops">Selling Crops</option>
                        <option value="Crop Issues">Crop Issues</option>
                        <option value="Machinery Help">Machinery Help</option>
                        <option value="Other">Other</option>
                    </select>

                </div>
                <div>
                    <label class="block text-gray-500">Your Question or Message</label>
                    <textarea class="w-full p-2 border rounded h-24" name="yourques" placeholder="Type your doubt here..."></textarea>
                </div>
                <div>
                    <label class="block text-gray-500">Preferred Language</label>
                    <select class="w-full p-2 border rounded" name="yourlang" placeholder="e.g. Hindi, Punjabi, English">
                        <option value="" disabled selected>e.g. Hindi, Punjabi, English</option>
                        <option value="hindi">Hindi</option>
                        <option value="punjabi">Punjabi</option>
                        <option value="english">English</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">REQUEST A CALL</button>
            </form>
        </div>
    </div>


</div>