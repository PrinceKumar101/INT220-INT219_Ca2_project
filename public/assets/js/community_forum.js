const ws = new WebSocket("ws://localhost:8080");

function createChatBubble({ user_id, user_name, user_role, message }) {
  const isCurrentUser = String(user_id) == String(USER_ID);
  console.log(USER_ID);
  console.log(user_id);
  
  console.log(isCurrentUser);
  
  const alignmentClass = isCurrentUser ? "items-end justify-end" : "items-start justify-start";
  const bubbleColor = isCurrentUser ? "bg-blue-200" : "bg-slate-200";
  const nameColor = user_role === "expert" ? "text-blue-700" : "text-green-700";
  const roleIcon = user_role === "expert" ? "✅" : "";

  return `
    <div class="w-full flex ${alignmentClass} ">
      <div class="max-w-xs w-fit p-2 rounded-xl shadow ${bubbleColor}">
        <div class="flex items-center gap-2 mb-1">
          <span class="font-semibold ${nameColor}">${user_name}</span>
          <span class="text-sm">${roleIcon}</span>
        </div>
        <div class="text-base text-gray-800 break-words whitespace-pre-wrap">${message}</div>
      </div>
    </div>`;
}

function appendMessage(messageData) {
  const chatBox = document.getElementById("chat-box");
  const chatHTML = createChatBubble(messageData);
  chatBox.innerHTML += chatHTML;
  chatBox.scrollTop = chatBox.scrollHeight;
}

function send_message() {
  const chatBox = document.getElementById("chat-box");
  const msgInput = document.getElementById("message-input");
  const message = msgInput.value.trim();

  if (message !== "") {
    const messageData = {
      user_id: USER_ID,
      user_name: USER_NAME,
      user_role: USER_ROLE,
      message: message,
    };

    appendMessage(messageData);
    ws.send(JSON.stringify(messageData));
    msgInput.value = "";
  }
}

ws.onmessage = function (event) {
  const chatBox = document.getElementById("chat-box");

  try {
    const data = JSON.parse(event.data);
    console.log(data);
    

    if (data.status === true && Array.isArray(data.prev_messages)) {
      data.prev_messages.forEach((msg) => {
        appendMessage({
          user_id: msg[5],
          user_name: msg[1],
          user_role: msg[4],
          message: msg[2],
        });
      });
    } else if (data.message) {
      appendMessage({
        user_id: data.user_id,
        user_name: data.user_name,
        user_role: data.user_role,
        message: data.message,
      });
    }
  } catch (error) {
    console.error("Invalid message received:", event.data);
  }
};

document.getElementById("send-btn").addEventListener("click", send_message);

document
  .getElementById("message-input")
  .addEventListener("keypress", (event) => {
    if (event.key === "Enter" && !event.shiftKey) {
      event.preventDefault();
      send_message();
    }
  });
