<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/icons/star.png" type="image/x-icon">
    <title>MediaStar | Contact</title>
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
      @keyframes moveArrow {
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
        animation: moveArrow 1.5s infinite; /* Adjust the duration as needed */
      }
    </style>
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
        <h1 class="text-center">CONTACT US</h1>
    </div>
    </div>
    <!-- Contact with us -->
    <h1 class="text-center text-2xl md:text-3xl font-bold mt-24">Contact with us</h1>
    <div class=" flex flex-col md:flex-row  items-center mx-10 md:mx-24 m-10">
        <div class="w-full md:w-[50%] space-y-4">
            <input type="text" required placeholder="Name" class="input-field"> <br>
            <input type="email" required placeholder="Email" class="input-field"> <br>
            <input type="text" required placeholder="Contact Number" class="input-field"> <br>
            <textarea cols="23" rows="4" placeholder="Write your message ..." class="input-field"></textarea>
            <button class="flex justify-between items-center bg-[#0572E6] px-4 py-3 my-6">
                <p class="text-[#fff]">Send</p>
                <a class="arrow-link" href=""><img class="w-16 ms-4 " src="./assets/icons/arrow.png" alt="link arrow"></a>
              </button>
          </div>
          
          
        <div class="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.848473357356!2d90.39065337447117!3d23.7527822886865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a79e24ce7d%3A0xe859dc5a67c4c3f4!2sProthom%20Alo!5e0!3m2!1sen!2sbd!4v1694531925759!5m2!1sen!2sbd" class="w-[400px] md:w-[600px] h-[250px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           <div class="mx-10">
            <h1 class="font-bold my-2">Corporate Office</h1>
            <p>Pragati Insurance Bhaban, 20-21, <br>
                Karwan Bazar Dhaka 1215, <br>
                Bangladesh</p>
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