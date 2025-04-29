<?php
$apiKeyGemini = $_ENV["API_KEY"];
?>
<div class="bg-[#FAF4E6] flex flex-col items-center justify-center w-full p-6">
      <div class="w-full max-w-2xl h-[600px] bg-white rounded-2xl shadow-2xl flex flex-col">
        <div id="chatBox" class="flex-1 overflow-y-auto p-6 text-[#2E2E2E] flex flex-col gap-2"></div>

        <div class="p-4 bg-[#FDFBF7] border-t border-[#E2D9C1] rounded-b-2xl">
          <div class="flex items-center gap-2">
            <input  id="userInput" type="text"
              placeholder="Type your farming question..."
              class="flex-1 p-3 rounded-lg border border-[#D4C8B0] text-[#2E2E2E] placeholder-[#7E7566] focus:outline-none focus:ring-2 focus:ring-[#4CAF50] bg-[#FFFDF9]"
              onkeypress="if(event.key === 'Enter') sendMessage(event)"
            />
            <button
              onclick="sendMessage(event)"
              class="px-5 py-3 bg-[#4CAF50] text-white font-semibold rounded-lg hover:bg-[#43A047] transition duration-200"
            >
              Send
            </button>
          </div>
          <div class="flex justify-center mt-4">
            <button
              onclick="recommendPlants()"
              class="px-6 py-2 bg-[#A7D397] text-[#1B3B1A] font-semibold rounded-lg hover:bg-[#94C978] transition duration-200 shadow"
            >
              Plant Picks for Your Weather
            </button>
          </div>
        </div>
      </div>









      


      

      <script>
        const chatBox = document.getElementById("chatBox");
        const userInput = document.getElementById("userInput");
        const apiKey = "<?php echo htmlspecialchars($_ENV['API_KEY']); ?>";
        const modelName = "gemini-1.5-pro";

        window.onload = () => userInput.focus();

        function formatBotMessage(raw) {
          raw = raw.replace(
            /\*\*(.*?)\*\*/g,
            '<strong class="block mt-4 text-base text-green-700">$1</strong>'
          );
          raw = raw.replace(
            /\* (.*?)\n/g,
            '<li class="ml-6 list-disc">$1</li>'
          );
          raw = raw.replace(
            /(<li.*?>.*?<\/li>)/gs,
            '<ul class="mt-1 mb-2 text-sm text-[#333]">$1</ul>'
          );
          return raw.replace(/\n/g, "<br>");
        }

        function addMessage(message, isUser = false) {
          const messageDiv = document.createElement("div");
          messageDiv.classList.add(
            "p-3",
            "rounded-xl",
            "max-w-[70%]",
            "whitespace-pre-wrap",
            "text-sm"
          );

          if (isUser) {
            messageDiv.classList.add(
              "bg-gray-100",
              "text-[#1B3B1A]",
              "self-end",
              "rounded-lg",
              "px-4",
              "py-2",
              "max-w-[75%]"
            );
            messageDiv.textContent = `You: ${message}`;
          } else {
            messageDiv.classList.add(
              "bg-gray-200",
              "text-black",
              "self-start"
            );
            messageDiv.innerHTML = `<strong> FarmBot:</strong><br>${formatBotMessage(
              message
            )}`;
          }

          chatBox.appendChild(messageDiv);
          chatBox.scrollTop = chatBox.scrollHeight;
        }

        addMessage(
          "Hello I'm FarmBot, your farming assistant. Ask me anything related to farming!"
        );

        async function getGeminiResponse(prompt) {
          try {
            const response = await fetch(
              `https://generativelanguage.googleapis.com/v1/models/${modelName}:generateContent?key=${apiKey}`,
              {
                method: "POST",
                headers: {
                  "Content-Type": "application/json",
                },
                body: JSON.stringify({
                  contents: [
                    {
                      parts: [
                        {
                          text: `You're a friendly farming assistant. Only answer farming/gardening questions. If irrelevant, reply politely in a helpful tone. If the question is in Hindi, answer in Hindi.\n\n${prompt}`,
                        },
                      ],
                    },
                  ],
                }),
              }
            );

            if (!response.ok) {
              console.log(response);
              
              throw new Error("There was an issue with the request. Please try again.");
            }

            const data = await response.json();
            if (
              data &&
              data.candidates &&
              data.candidates[0] &&
              data.candidates[0].content &&
              data.candidates[0].content.parts &&
              data.candidates[0].content.parts[0]
            ) {
              return data.candidates[0].content.parts[0].text;
            } else {
              return "Sorry, something went wrong with the response.";
            }
          } catch (err) {
            console.error(err);
            return "Sorry, we encountered an error while processing your request. Please try again later. ";
          }
        }

        async function sendMessage(event) {
          event.preventDefault();
          const input = userInput.value.trim();
          if (!input) return;

          addMessage(input, true);
          userInput.value = "";

          const response = await getGeminiResponse(input);
          console.log(response);
          
          addMessage(response);
        }

        async function recommendPlants() {
          if (!navigator.geolocation) {
            addMessage("Geolocation is not supported by your browser.");
            return;
          }

          navigator.geolocation.getCurrentPosition(async (position) => {
            const { latitude, longitude } = position.coords;

            const currentDate = new Date().toLocaleDateString("en-GB", {
              day: "2-digit",
              month: "long",
              year: "numeric",
            });

            const prompt = `I am at latitude ${latitude} and longitude ${longitude}. The current date is ${currentDate}. based on the typical climate and the general time of year , please recommend the best 3 crops to grow right now. Donot give uncertain data, or mention that you don't know about it. Be specific about why each crop is suitable based on current weather or climate patterns. Also provide a short description for each crop.`;

            const response = await getGeminiResponse(prompt);

            const messageDiv = document.createElement("div");
            messageDiv.classList.add(
              "bg-gray-200",
              "text-black",
              "self-start",
              "rounded-xl",
              "px-4",
              "py-3",
              "text-sm",
              "shadow-md"
            );

            const content = response
              .replace(
                /\*\*(.*?)\*\*/g,
                '<strong class="text-green-800 block mt-3 mb-1 text-base">$1</strong>'
              )
              .replace(
                /^[-*•]\s+(.*)/gm,
                '<li class="ml-5 list-disc text-sm">$1</li>'
              )
              .replace(/(<li.*?>.*?<\/li>)/gs, '<ul class="mt-1 mb-3">$1</ul>')
              .replace(/\n{2,}/g, "<br><br>")
              .replace(/\n/g, "<br>");

            messageDiv.innerHTML = `<strong> FarmBot:</strong><br>${content}`;
            chatBox.appendChild(messageDiv);
            chatBox.scrollTop = chatBox.scrollHeight;
          });
        }
      </script>
</div>
