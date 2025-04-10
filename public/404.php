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
  <div class="bg-transparent backdrop-blur-2xl w-full overflow-hidden [--primary-color:var(--color-green-500)] [--primary-text-color:var(--color-white)]">
    <div class="flex items-center justify-center min-h-screen px-4 py-8">
      <div class="text-center rounded-xl bg-white bg-opacity-40 backdrop-filter backdrop-blur-sm w-full max-w-4xl mx-auto p-1 sm:p-8">
        <div class="flex flex-col md:flex-row justify-center items-center mb-6 md:mb-12">
          <svg class="w-48 h-48 sm:w-64 sm:h-64 floating md:mr-8 lg:mr-16" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path class="path" fill="none" stroke="var(--primary-color)" stroke-width="2" d="M50,100 Q75,50 100,100 T150,100" />
            <text x="85" y="120" font-family="Arial" font-size="70" font-weight="bold" fill="var(--primary-color)">404</text>
            <circle cx="50" cy="100" r="5" fill="var(--primary-color)" />
            <circle cx="150" cy="100" r="5" fill="var(--primary-color)" />
          </svg>
          <div class="md:text-left md:ml-4 mt-4 md:mt-0">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[var(--primary-color)] mb-2">Page Not Found</h1>
            <p class="text-md sm:text-lg text-[var(--primary-color)] mb-6 sm:mb-8">Sorry, we couldn't find the page you're looking for.</p>
          </div>
        </div>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 px-4">
          <button id="goBack" class="px-6 py-3 bg-[var(--primary-color)] hover:bg-[var(--primary-color)] text-[var(--primary-text-color)] font-medium rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] w-full sm:w-auto hover:scale-105 cursor-pointer">
            Go Back
          </button>
          <a href="./index.php" class="px-6 py-3 bg-[color:var(--primary-color)/0.2] border border-[var(--primary-color)] hover:bg-[color:var(--primary-color)/0.3] text-[var(--primary-color)] font-medium rounded-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] w-full sm:w-auto flex items-center justify-center hover:scale-105">
            Go Home
          </a>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('goBack').addEventListener('click', function() {
      window.history.back();
    });
  </script>
</div>