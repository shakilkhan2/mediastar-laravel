<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./assets/icons/star.png"
      type="image/x-icon"
    />
    <title>MediaStar | Business</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- css -->
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        padding-bottom: 100px;
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      /* .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
      } */
      /* Define the fadeIn and fadeOut animations */
      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      @keyframes fadeOut {
        from {
          opacity: 1;
        }
        to {
          opacity: 0;
        }
      }

      /* Apply the fadeIn and fadeOut animations to the modal */
      .fade-in {
        animation: fadeIn 0.5s ease-in-out; /* Adjust the duration and timing function as needed */
      }

      .fade-out {
        animation: fadeOut 0.3s ease-in-out; /* Adjust the duration and timing function as needed */
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <header class="sticky top-0 bg-[#FAFAFA] z-50">
      <nav class="">
        <div class="container py-4 mx-auto flex justify-between items-baseline">
          <div>
            <a href="/"
              ><h1 class="text-2xl font-bold ps-2 md:ps-0">
                MEDIASTAR LTD.
              </h1></a
            >
          </div>

          <!-- Menu items -->
          <div style="font-family: 'Roboto', sans-serif;" class="hidden md:flex space-x-10 text-md md:order-2">
            <!-- Dropdown for "COMPANY" -->
            <div class="relative group">
              <a
                href="/"
                class=" flex items-center"
                onclick="toggleDropdown('company-dropdown', 'open-arrow')"
              >
                <p>COMPANY</p>
                <!-- Arrow indicators for open and closed -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  class="h-4 w-4 inline-block ml-1 transform transition-transform"
                  id="open-arrow"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                  ></path>
                </svg>
              </a>
              <!-- Dropdown content (initially hidden) -->
              <div style="font-family: 'Roboto', sans-serif;"
                id="company-dropdown"
                class="hidden absolute left-0 mt-2 p-6 mx-auto space-y-4 bg-[#D9D9D9D9] opacity-85 "
              >
                <a href="/about"><p>ABOUT US</p></a>
                <hr class="py-1 border-gray-500" />
                <a href="/achievements"><p>ACHIEVEMENTS</p></a>
                <hr class="py-1 border-gray-500"/>
                <a href="/management"><p>MANAGEMENT</p></a>
                <hr class="py-1 border-gray-500" />
              </div>
            </div>

            <!-- Other menu items -->
            <a href="/business"><p>BUSINESSES</p></a>
            <a href="/csr"><p>CSR</p></a>
            <a href="/career"><p>CAREER</p></a>
            <a href="/contact"><p>CONTACT</p></a>
          </div>

          <!-- Mobile menu button -->
          <div class="md:hidden pr-2 ">
            <button id="mobile-menu-button" class="text-black">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-8 w-8"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                ></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile menu (initially hidden) -->
        <div
          id="mobile-menu"
          class="hidden font-semibold py-4 px-2 flex flex-col gap-4 md:hidden text-left pr-2 fixed top-[72px] w-full bg-[#D9D9D9D9] z-50"
        >
          <!-- Dropdown for "COMPANY" in mobile menu -->
          <div class="relative group ">
            <a
              href="#"
              class=" flex items-center justify-left"
              onclick="toggleDropdown('mobile-company-dropdown', 'mobile-open-arrow')"
            >
              <p>COMPANY</p>
              <!-- Arrow indicator -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                class="h-4 w-4 inline-block ml-1 transform transition-transform"
                id="mobile-open-arrow"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 9l-7 7-7-7"
                ></path>
              </svg>
            </a>
            <!-- Dropdown content (initially hidden) -->
            <div
              id="mobile-company-dropdown"
              class="hidden mt-2 px-4 font-normal text-gray-900 space-y-4"
            >
            <hr>
              <a href="/about"><p>ABOUT US</p></a>
              <hr>
              <a href="/achievements"><p>ACHIEVEMENTS</p></a>
              <hr>
              <a href="/management"><p>MANAGEMENT</p></a>
              <hr>
            </div>
          </div>

          <!-- Other mobile menu items -->
          <a href="/business"><p>BUSINESSES</p></a>
          <a href="/csr"><p>CSR</p></a>
          <a href="/career"><p>CAREER</p></a>
          <a href="/contact"><p>CONTACT</p></a>
        </div>
      </nav>
    </header>
    <!-- Main -->
    <main>
      <!-- Banner -->
      <div
        style="background-image: url(./assets/images/cover.png)"
        class="w-full bg-cover bg-center h-[30vh] md:h-[70vh]"
      >
        <div
          class="flex justify-center items-center text-white text-3xl md:text-4xl font-bold h-full"
        >
          <h1>BUSINESSES</h1>
        </div>
      </div>
      <!--  -->

      <!-- Business -->
      <div class="w-[90%] mx-auto grid grid-cols-2 md:grid-cols-3 gap-16 my-16">
        <div id="myBtn" class="bg-white shadow-lg cursor-pointer">
          <div>
            <img class="w-[100%]" src="./assets/images/business1.png" alt="" />
          </div>
          <div class="flex justify-center items-center py-5">
            <img
              class="w-[70%] md:w-auto"
              src="./assets/images/prothom-alo-digital.png"
              alt=""
            />
          </div>
        </div>
        <div id="myBtn" class="bg-white shadow-lg cursor-pointer">
          <div>
            <img class="w-[100%]" src="./assets/images/business2.png" alt="" />
          </div>
          <div class="flex justify-center items-center py-5 ">
            <img
              class=""
              src="./assets/images/ki-alo.png"
              alt=""
            />
          </div>
        </div>
        <div id="myBtn" class="bg-white shadow-lg cursor-pointer">
          <div>
            <img class="w-[100%]" src="./assets/images/business3.png" alt="" />
          </div>
          <div class="flex justify-center items-center py-5">
            <img
              class=""
              src="./assets/images/b-chinta.png"
              alt=""
            />
          </div>
        </div>
        <div id="myBtn" class="bg-white shadow-lg cursor-pointer">
          <div>
            <img class="w-[100%]" src="./assets/images/b4.png" alt="" />
          </div>
          <div class="flex justify-center items-center py-5">
            <img
              class=""
              src="./assets/images/chorki.png"
              alt=""
            />
          </div>
        </div>
        <div id="myBtn" class="bg-white shadow-lg cursor-pointer">
          <div>
            <img class="w-[100%]" src="./assets/images/b5.png" alt="" />
          </div>
          <div class="flex justify-center items-center py-5 px-4 md:px-0">
            <img
              class="mt-[8px]"
              src="./assets/images/fashion.png"
              alt=""
            />
          </div>
        </div>
        <div id="myBtn" class="bg-white shadow-lg cursor-pointer">
          <div>
            <img class="w-[100%]" src="./assets/images/b6.png" alt="" />
          </div>
          <div class="flex justify-center items-center py-5">
            <img
              class=""
              src="./assets/images/prothoma.png"
              alt=""
            />
          </div>
        </div>
        <div id="myBtn" class="bg-white shadow-lg cursor-pointer">
          <div>
            <img class="w-[100%]" src="./assets/images/business2.png" alt="" />
          </div>
          <div class="flex justify-center items-center py-5">
            <img
              class=""
              src="./assets/images/ki-alo.png"
              alt=""
            />
          </div>
        </div>
        <div id="myBtn" class="bg-white shadow-lg cursor-pointer">
          <div>
            <img class="w-[100%]" src="./assets/images/b4.png" alt="" />
          </div>
          <div class="flex justify-center items-center py-5">
            <img
              class=""
              src="./assets/images/chorki.png"
              alt=""
            />
          </div>
        </div>
        <div id="myBtn" class="bg-white shadow-lg cursor-pointer">
          <div>
            <img class="w-[100%]" src="./assets/images/business1.png" alt="" />
          </div>
          <div class="flex justify-center items-center py-5">
            <img
              class=""
              src="./assets/images/prothom-alo-digital.png"
              alt=""
            />
          </div>
        </div>
      </div>
      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="relative fade-in modal-content">
          <div
            class="flex flex-col md:flex-row items-center gap-6 md:gap-24 mx-10 md:mx-24 bg-[#FAFAFA]"
          >
            <div>
              <img class="w-96" src="./assets/images/modal-img.png" alt="" />
            </div>
            <div class="w-[90%] md:w-[50%] md:w-[70%] pb-4 md:pb-none">
              <img src="./assets/images/prothom-alo-digital.png" alt="" />
              <p class="text-justify mt-4">
                Prothom Alo Digital owns and operates a wide range of digital
                products and services, including news and entertainment portals,
                e-magazine platforms, e-commerce, and OTT platform. We have a
                strong focus on user engagement and innovation, and it has been
                at the forefront of the digital revolution in Bangladesh.
              </p>
              <div class="flex justify-between">
                <a href="https://www.prothomalo.com/">
                  <button
                    class="border border-gray-800 bg-none px-6 py-1 mt-8 md:mt-20"
                  >
                    Visit Site
                  </button>
                </a>
              </div>
            </div>
          </div>
          <div class="absolute top-4 right-12 md:right-28 cursor-pointer close">
            <img class="w-4" src="./assets/icons/close.png" alt="" />
          </div>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <footer class="flex flex-col md:flex-row justify-between bg-[#E2E2E2] p-10">
      <div class="">
        <h1 class="text-2xl md:text-4xl font-bold">MEDIASTAR LTD.</h1>
        <div class="flex gap-4 my-4">
          <i class="fa-brands text-3xl fa-facebook-f"></i>
          <i class="fa-brands text-3xl fa-instagram"></i>
          <i class="fa-brands text-3xl fa-twitter"></i>
          <i class="fa-brands text-3xl fa-youtube"></i>
        </div>
      </div>
      <div class="flex flex-col md:flex-row gap-12">
        <div class="font-semibold">
        <a href="/about"><p>About us</p></a>
    <a href="/business"><p>Businesses</p></a>
    <a href="/career"><p>Career</p></a>
        </div>
        <div>
          <p class="font-semibold">Contact Us</p>
          <p class="font-semibold mt-4">Address</p>
          <p>
            Pragati Insurance Bhaban, <br />
            20-21, Karwan Bazar Dhaka 1215, <br />
            Bangladesh
          </p>
          <a href="#"><p class="mt-4">Privacy Policy</p></a>
          <a href="#"><p>Terms of Use</p></a>
        </div>
      </div>
    </footer>

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
    <!-- modal -->
    <script>
      var modal = document.getElementById("myModal");
      var modalContent = document.querySelector(".modal-content");
      var btn = document.getElementById("myBtn");
      var span = document.getElementsByClassName("close")[0];

      btn.onclick = function () {
        modal.style.display = "block";
        modalContent.classList.add("fade-in"); // Add the fade-in class
      };

      span.onclick = function () {
        modalContent.classList.add("fade-out"); // Add the fade-out class
        setTimeout(function () {
          modal.style.display = "none";
          modalContent.classList.remove("fade-out"); // Remove the fade-out class
        }, 300); // Wait for the animation to complete (0.5 seconds) before hiding the modal
      };

      window.onclick = function (event) {
        if (event.target == modal) {
          modalContent.classList.add("fade-out"); // Add the fade-out class
          setTimeout(function () {
            modal.style.display = "none";
            modalContent.classList.remove("fade-out"); // Remove the fade-out class
          }, 500); // Wait for the animation to complete (0.5 seconds) before hiding the modal
        }
      };
    </script>
  </body>
</html>
