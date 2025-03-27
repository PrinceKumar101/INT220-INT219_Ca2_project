<style>
    .floating {
      animation: float 6s ease-in-out infinite;
    }
    @keyframes float {
      0% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-20px);
      }
      100% {
        transform: translateY(0px);
      }
    }
    .path {
      stroke-dasharray: 1000;
      stroke-dashoffset: 1000;
      animation: dash 5s linear forwards;
    }
    @keyframes dash {
      to {
        stroke-dashoffset: 0;
      }
    }
  </style>
<div>
  <div class="bg-transparent backdrop-blur-2xl w-full overflow-hidden">
    <div class="flex items-center justify-center min-h-screen px-4 py-8">
      <div class="text-center rounded-xl bg-white bg-opacity-40 backdrop-filter backdrop-blur-sm w-full max-w-4xl mx-auto p-1 sm:p-8">
        <div class="flex flex-col md:flex-row justify-center items-center mb-6 md:mb-12">
          <svg class="w-48 h-48 sm:w-64 sm:h-64 floating md:mr-8 lg:mr-16" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path class="path" fill="none" stroke="#0ea5e9" stroke-width="2" d="M50,100 Q75,50 100,100 T150,100" />
            <text x="85" y="120" font-family="Arial" font-size="70" font-weight="bold" fill="#0ea5e9">404</text>
            <circle cx="50" cy="100" r="5" fill="#0ea5e9" />
            <circle cx="150" cy="100" r="5" fill="#0ea5e9" />
          </svg>
          <div class="md:text-left md:ml-4 mt-4 md:mt-0">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-orange-700 mb-2">Page Not Found</h1>
            <p class="text-md sm:text-lg text-orange-600 mb-6 sm:mb-8">Sorry, we couldn't find the page you're looking for.</p>
          </div>
        </div>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 px-4">
          <button id="goBack" class="px-6 py-3 bg-orange-500 hover:bg-orange-600 text-white font-medium rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-orange-400 w-full sm:w-auto">
            Go Back
          </button>
          <a href="./index.php" class="px-6 py-3 bg-white border border-orange-300 hover:bg-orange-50 text-orange-600 font-medium rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-orange-400 w-full sm:w-auto flex items-center justify-center">
            Go Home
          </a>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Go back button functionality
    document.getElementById('goBack').addEventListener('click', function() {
      window.history.back();
    });

    
    

  </script>
</div>