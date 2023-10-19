<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/icons/star.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>MediaStar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Define a custom CSS class for the input fields and textarea */
        .input-field {
          width: 100%;
          max-width: 400px; /* You can adjust this value to control the maximum width */
          padding: 8px;
          margin-top: 4px;
          border: 1px solid #D9D9D9;
          background-color: #D9D9D9;
          outline: none;
          resize: vertical;
        }
      </style>
    <!-- css -->
    <style>
      /* Define the animation */
      @keyframes moveArrowRight {
        0% {
          transform: translateX(0);
        }
        50% {
          transform: translateX(5px); /* Move 5 pixels to the right */
        }
        100% {
          transform: translateX(0);
        }
      }

      /* Apply the animation to the image */
      .arrow-link img {
        z-index: 0;
        animation: moveArrowRight 1.5s infinite; /* Adjust the duration as needed */
      }
      /* left arrow */
      @keyframes moveArrowLeft {
        0% {
          transform: translateX(0);
        }
        50% {
          transform: translateX(-5px); /* Move 5 pixels to the left */
        }
        100% {
          transform: translateX(0);
        }
      }

      /* Apply the animation to the image */
      .arrow-link-left img {
        z-index: 0;
        animation: moveArrowLeft 1.5s infinite; /* Adjust the duration as needed */
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    @include('layouts.includes.header')
    
    <!-- Main -->
    @yield('content')
    <!-- Footer -->
    @include('layouts.includes.footer')
    
 <!-- JS -->
 <script
      src="https://kit.fontawesome.com/2f678b91de.js"
      crossorigin="anonymous"
    ></script>
    <script>
      function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle("hidden");
      }

      // Toggle mobile menu
      const mobileMenuButton = document.getElementById("mobile-menu-button");
      const mobileMenu = document.getElementById("mobile-menu");

      mobileMenuButton.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });
    </script>
    @yield('script')
  </body>
</html>