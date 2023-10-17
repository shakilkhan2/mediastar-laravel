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
              <div
                href=""
                class=" flex items-center cursor-pointer"
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
    </div>
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