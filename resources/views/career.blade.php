<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/icons/star.png" type="image/x-icon">
    <title>MediaStar | Career</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Header -->
    <header class="sticky top-0 bg-[#FAFAFA] z-50">
      <nav class="">
        <div class="container py-4 mx-auto flex justify-between items-baseline">
          <div>
            <a href="#"
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
  <main>
    <!-- Banner -->
<div style="background-image: url(./assets/images/cover.png); " class="w-full bg-cover bg-center h-[30vh] md:h-[70vh]"  >
    <div class="flex justify-center items-center text-white text-3xl md:text-4xl font-bold h-full">
        <h1 class="text-center">CAREER</h1>
    </div>
    </div>
    <!-- Jobs -->
   <div class="mx-4 md:mx-24 mt-10">
    <h1 class="text-2xl md:text-3xl font-bold">PROTHOM ALO</h1>
    <div class=" ">
        <div class="flex justify-between">
          <div class="w-1/3 text-left font-light text-gray-500 p-4">Job Title</div>
          <div class="w-1/3 text-left font-light text-gray-500 p-4">Location</div>
          <div class="w-1/3 text-left font-light text-gray-500 p-4">Deadline</div>
        </div>
        <div class="flex justify-between bg-[#D9D9D9]">
          <div class="w-1/3 text-left font-bold  p-4"><a href="./job-details.html">Senior IT Engineer </a><br> <span class="font-normal md:font-semibold">Department: Information Technology</span></div>
          <div class="w-1/3 text-left font-bold  p-4">Dhaka</div>
          <div class="w-1/3 text-left font-bold  p-4">01 Aug 2023</div>
        </div>
        <div class="flex justify-between mt-2 bg-[#D9D9D9]">
            <div class="w-1/3 text-left font-bold  p-4">Assistant Manager, Digital Product <br> <span class="font-normal md:font-semibold">Department: Digital Technology</span></div>
            <div class="w-1/3 text-left font-bold  p-4">Dhaka</div>
            <div class="w-1/3 text-left font-bold  p-4">01 Aug 2023</div>
          </div>
      </div>
   </div>
   <!-- chorki -->
   <div class="mx-4 md:mx-24 my-10">
    <h1 class="text-2xl md:text-3xl font-bold">CHORKI</h1>
    <div class=" ">
        <div class="flex justify-between">
          <div class="w-1/3 text-left font-light text-gray-500 p-4">Job Title</div>
          <div class="w-1/3 text-left font-light text-gray-500 p-4">Location</div>
          <div class="w-1/3 text-left font-light text-gray-500 p-4">Deadline</div>
        </div>
        <div class="flex justify-between  bg-[#D9D9D9]">
          <div class="w-1/3 text-left font-bold  p-4"><a href="./job-details.html">Senior IT Engineer </a><br> <span class="font-normal md:font-semibold">Department: Information Technology</span></div>
          <div class="w-1/3 text-left font-bold  p-4">Dhaka</div>
          <div class="w-1/3 text-left font-bold p-4">01 Aug 2023</div>
        </div>
        <div class="flex justify-between mt-2 bg-[#D9D9D9]">
            <div class="w-1/3 text-left font-bold  p-4">Assistant Manager, Digital Product <br> <span class="font-normal md:font-semibold">Department: Digital Technology</span></div>
            <div class="w-1/3 text-left font-bold  p-4">Dhaka</div>
            <div class="w-1/3 text-left font-bold  p-4">01 Aug 2023</div>
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