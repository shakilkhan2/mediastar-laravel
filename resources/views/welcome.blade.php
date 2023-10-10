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
                href=""
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
    <main style="font-family: 'Roboto', sans-serif;">
      <!-- Banner -->
      <div
        style="background-image: url(./assets/images/banner.png)"
        class="w-full bg-cover bg-center h-[50vh] md:h-[100vh]"
      >
        <div class="flex flex-col justify-center pl-10 md:pl-24 h-full">
          <h1 style="font-family: 'Roboto', sans-serif;" class="text-white text-4xl md:text-6xl font-semibold md:font-bold">
            The largest Bengali <br />
            news media company <br />
            in the world
          </h1>
          <div>
            <a href="#" class="arrow-link">
              <img class="w-20 md:w-44" src="./assets/icons/arrow.png" alt=""
            /></a>
          </div>
        </div>
      </div>
      <!-- About Us -->
      <div class="flex flex-col md:flex-row justify-center gap-20 my-10 items-center mx-10">
        <div>
<img class="w-96 rounded-lg" src="./assets/images/image27.png" alt="">
        </div>
        <div style="font-family: 'Roboto', sans-serif;" class="w-full md:w-[500px] mt-10 md:mt-0">
          <div class="flex place-items-start">
            <div>
              <a href="#" class="arrow-link">
                <img class="mt-2" src="./assets/icons/arrow3.svg" alt="">
              </a>
            </div>
            <div>
              <h1 class="text-2xl md:text-3xl font-semibold md:font-bold ml-10"><span class="text-[#FB2121]">Discover, Explore, Evolve:</span> <br> Embrace the Journey with our Media</h1>
            </div>
          </div>
          <div class=" text-justify">
            <p class="mt-8 ">
              At our media company, we invite you to discover, explore, and evolve through an enriching journey of information and storytelling. With a commitment to delivering captivating content, we strive to ignite your curiosity and inspire a thirst for knowledge. Embrace the diverse perspectives and narratives we bring to light, allowing you to broaden your horizons and gain new insights.
            </p>
          </div>
          <a href="#">

            <button class="flex justify-between items-center bg-[#0572E6] px-4 py-3 mt-6">
              <p class="text-[#fff]">About Us</p>
              <a class="arrow-link" href=""><img class="w-16 ms-4 " src="./assets/icons/arrow.png" alt="link arrow"></a>
            </button>
          </a>
        </div>
      </div>
      <!-- Prothom Alo -->
      <div style="font-family: 'Roboto', sans-serif;" class="flex flex-col-reverse md:flex-row justify-between ">
        <div class="bg-[#DCDCDC] w-full md:w-[50%] ">
<div class=" flex flex-col justify-center m-10 md:m-0 md:mx-40 h-full">
  <div class="flex items-center gap-4">
    <div>
  <img src="./assets/icons/ellipse.svg" alt="ellipse">
    </div>
    <div>
  <p class="text-2xl">PRINT</p>
    </div>
  </div>
  <div class="flex items-center gap-4 my-10">
   
    <a class="arrow-link" href="https://www.prothomalo.com/"><div><img src="./assets/icons/arrow3.svg" alt="red arrow"></div></a>
    <div><a href="https://www.prothomalo.com/"><img src="./assets/images/alo.png" alt="prothom alo log"></a></div>
   
  </div>
  <p class="text-justify text-center  mb-10">
    Prothom Alo, the flagship brand of Mediastar Limited, is the largest Bengali news media  company in the world. Every day, 5 million  people read the print edition of Prothom Alo.
  </p>
  <div class="flex gap-4">
    <button class="bg-[#0572E6] px-4 py-2" >
     <a href="#" class="arrow-link-left"> <img src="./assets/icons/arrow-left.svg" alt=""></a>
    </button>
    <button class="bg-[#0572E6] px-4 py-2">
      <a href="#" class="arrow-link"><img src="./assets/icons/arrow-right.svg" alt=""></a>
    </button>
  </div>
</div>
        </div>
        <div>
<img src="./assets/images/protho-alo.png" alt="">
        </div>
      </div>
      <!-- Establishment and Employees -->
      <div class="flex  justify-between mx-2 md:mx-28  my-10">
        <div class="text-center w-[200px]  md:w-96"><h1 class="text-2xl md:text-4xl font-bold">1998</h1> <p class="font-light md:font-bold">Year of Establishment</p></div>
        <div class="text-center w-[200px] md:w-96 border-x border-black"><h1 class="text-2xl md:text-4xl font-bold">9</h1> <p class="font-light md:font-bold">Total Business Units</p></div>
        <div class="text-center w-[200px] md:w-96"><h1 class="text-2xl md:text-4xl font-bold">1005</h1> <p class="font-light md:font-bold">No. of Employees</p></div>
      </div>
      <!-- Leader -->
      <div class="flex flex-col md:flex-row">
        <div>
<img src="./assets/images/leader.png" alt="">
        </div>
        <div class="bg-[#DCDCDC] w-full md:w-[50%] ">
          <div class=" flex flex-col justify-center m-10 md:m-0 md:mx-20 h-full">
            
            <div class="flex items-center gap-4 my-10">
             
              <a class="arrow-link" href="https://www.prothomalo.com/"><div><img src="./assets/icons/arrow3.svg" alt="red arrow"></div></a>
              <div><h1 class="text-2xl md:text-3xl font-semibold md:font-bold text-[#FB2121]">Visionary Leader</h1></div>
             
            </div>
            <p class="text-justify text-center mb-10 lg:mb-32">
              “Mediastar Limited is committed to being a leading force in the media industry, igniting inspiration, and illuminating the world with impactful concerns. Our vision is to create a constellation of excellence, where each star represents innovation, creativity, and unparalleled storytelling. With a dedication to quality, we aim to captivate audiences, provoke thought, and evoke emotions.”
            </p>
            <div class="flex gap-4">
              <h3 class="text-xl font-bold text-gray-600">
                <hr class="border-black">
                Matiur Rahman <br>
                Editor, Prothom Alo</h3>
            </div>
          </div>
                  </div>
      </div>
      <!-- Achievements -->
      <div class="flex flex-col md:flex-row mx-10 md:mx-0 justify-center gap-16 items-center my-10">
        <div>
<img src="./assets/images/achivement.png" alt="">
        </div>
        <div class="w-full md:w-[500px] mt-10 md:mt-0">
          <div class="flex place-items-start">
            <div>
              <a href="#" class="arrow-link">
                <img class="mt-2" src="./assets/icons/arrow3.svg" alt="">
              </a>
            </div>
            <div>
              <h1 class="text-2xl md:text-3xl font-semibold md:font-bold ml-10"><span class="text-[#FB2121]">Achievements</span> </h1>
            </div>
          </div>
          <div class=" text-justify">
            <p class="text-lg font-semibold mt-4">2023</p>
            <hr class="w-40 border-black">
            <h3 class="text-2xl md:text-3xl font-bold md:font-extrabold mt-6 mb-8">
              WAN IFRA: South Asian <br> Digital Media Award 2022
            </h3>
            <ol>
              <li>1. Best Digital Advertising Project (Gold)</li>
              <li>2. Best Digital Advertising Project (Silver)</li>
              <li>3. Best in Audience Engagement (Silver)</li>
              <li>4. Best ePaper-Concept (Bronze) &</li>
              <li>5. Best Digital Subscription Initiative (Bronze)</li>
              
            </ol>
          </div>
          <a href="#">

            <div class="flex gap-4 mt-8">
              <button class="bg-[#0572E6] px-4 py-2">
                <a href="#" class="arrow-link-left"><img src="./assets/icons/arrow-left.svg" alt=""></a>
              </button>
              <button class="bg-[#0572E6] px-4 py-2">
                <a href="#" class="arrow-link"><img src="./assets/icons/arrow-right.svg" alt=""></a>
              </button>
            </div>
          </a>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <footer style="font-family: 'Roboto', sans-serif;" class="flex flex-col md:flex-row justify-between bg-[#E2E2E2] p-10">
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
    <p>Pragati Insurance Bhaban, <br> 20-21, Karwan Bazar Dhaka 1215, <br> Bangladesh</p>
    <a href="#"><p class="mt-4">Privacy Policy</p></a>
    <a href="#"><p>Terms of Use</p></a>
  </div>
</div>
    </footer>
    
<!-- JS -->
<script src="https://kit.fontawesome.com/2f678b91de.js" crossorigin="anonymous"></script>
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
  </body>
</html>