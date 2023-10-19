@extends('layouts.master')
@section('content')

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
        <div  class="bg-white shadow-lg cursor-pointer">
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
        <div  class="bg-white shadow-lg cursor-pointer">
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
        <div  class="bg-white shadow-lg cursor-pointer">
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
        <div  class="bg-white shadow-lg cursor-pointer">
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
        <div  class="bg-white shadow-lg cursor-pointer">
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
        <div  class="bg-white shadow-lg cursor-pointer">
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
        <div  class="bg-white shadow-lg cursor-pointer">
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
        <div  class="bg-white shadow-lg cursor-pointer">
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

@endsection
