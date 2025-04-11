<?php
$user_name = "";
$db_connection = null;
if (check_if_loggedIn()) {
    $user_name = $_SESSION["user"]["name"];
    $role = $_SESSION["user"]["role"];
    $user_id = $_SESSION["loggedIn"]["user_id"];
}
?>

<div class="w-full mx-auto p-4 bg-white rounded-lg shadow-lg overflow-hidden">
    <div id="chat-box" class="h-[calc(100vh-22vh)]
 bg-gray-100 text-gray-800 overflow-y-auto text-lg p-4 rounded-md border border-gray-300 flex flex-col gap-2">
    </div>
    <div class="flex items-center gap-3 mt-3">
        <input id="message-input" type="text" placeholder="Type a message..."
            class="flex-1 bg-white text-gray-900 text-lg h-12 px-4 rounded-full shadow-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
        <button id="send-btn"
            class="bg-blue-500 text-white h-12 px-6 rounded-full shadow-md hover:bg-blue-600 transition-all">Send</button>
    </div>
</div>

<script>
    const USER_NAME = "<?= $user_name ?>";
    const USER_ROLE = "<?= $role ?>";
    const USER_ID = "<?= $user_id ?>";
    console.log(USER_NAME);
    console.log(USER_ROLE);
    console.log(USER_ID);
</script>
<script src="./assets/js/community_forum.js"></script>