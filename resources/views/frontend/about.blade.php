@extends('layouts.master')
@section('content')
<main>
<!-- Banner -->
<div style="background-image: url(./assets/images/cover.png); " class="w-full bg-cover bg-center h-[30vh] md:h-[70vh]"  >
<div class="flex justify-center items-center text-white text-3xl md:text-4xl font-bold h-full">
    <h1>ABOUT US  </h1>
</div>
</div>
<div class="flex flex-col md:flex-row items-center mx-10 gap-12 my-10">
    <div class="w-full md:w-[50%]">
        <h1 class="text-3xl font-bold text-[#FB2121] mb-12">
            Innovating Media, <br> Redefining Possibilities
        </h1>
        <p class="text-justify font-semibold mb-10">
            Mediastar Limited, a dynamic and innovative media company dedicated to pushing the boundaries of creativity and storytelling. At Mediastar, we believe in the power of media to inspire, inform, and entertain. Our passion for excellence drives us to deliver exceptional content that captivates audiences across various platforms.
        </p>
        </div>
        <div>
            <img  src="./assets/images/about.png" alt="celebrating">
        </div>
</div>
<div class="mx-10 mb-10">
    <p class="text-justify font-semibold">
        As a leader in the industry, we strive to redefine the media landscape by embracing cutting-edge technology, trends, and ideas. Our talented team of visionaries, from directors to producers, writers to editors, work collaboratively to create compelling narratives that resonate with diverse audiences.
    </p>
    <p class="text-justify font-semibold my-10">
        At Mediastar, we understand the importance of authentic storytelling. We believe in giving voice to untold stories, exploring new perspectives, and shedding light on issues that matter. Through our films, television shows, documentaries, and digital content, we aim to engage, educate, and empower individuals around the world.
    </p>
    <p class="text-justify font-semibold">
        Our commitment to quality is unwavering. We meticulously craft each project, paying attention to every detail, from pre-production to post-production. We strive for excellence in every aspect, ensuring that our work meets the highest standards of artistic integrity and technical precision.
    </p>
</div>
<!-- slider -->
<div class="mb-10">
    <div class="max-w-2xl md:max-w-full h-full">
      <div id="default-carousel" class="relative" data-carousel="static">
        <div class="overflow-hidden relative h-56 sm:h-64 md:h-96">
          <div class="duration-700 ease-in-out" data-carousel-item>
            <img
              src="./assets/images/cover.png"
              class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
              alt="..."
            />
          </div>

          <div class="duration-700 ease-in-out" data-carousel-item>
            <img
              src="./assets/images/cover.png"
              class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
              alt="..."
            />
          </div>

          <div class="duration-700 ease-in-out" data-carousel-item>
            <img
              src="./assets/images/cover.png"
              class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
              alt="..."
            />
          </div>
        </div>

        <div
          class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2"
        >
          <button
            type="button"
            class="w-3 h-3 rounded-full"
            aria-current="false"
            aria-label="Slide 1"
            data-carousel-slide-to="0"
          ></button>
          <button
            type="button"
            class="w-3 h-3 rounded-full"
            aria-current="false"
            aria-label="Slide 2"
            data-carousel-slide-to="1"
          ></button>
          <button
            type="button"
            class="w-3 h-3 rounded-full"
            aria-current="false"
            aria-label="Slide 3"
            data-carousel-slide-to="2"
          ></button>
        </div>

        <button
          type="button"
          class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
          data-carousel-prev
        >
          <span
            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-white group-focus:outline-none"
          >
            <svg
              class="w-5 h-5 text-white sm:w-6 sm:h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 19l-7-7 7-7"
              ></path>
            </svg>
           
          </span>
        </button>
        <button
          type="button"
          class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
          data-carousel-next
        >
          <span
            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white group-focus:outline-none"
          >
            <svg
              class="w-5 h-5 text-white sm:w-6 sm:h-6"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 5l7 7-7 7"
              ></path>
            </svg>
          </span>
        </button>
      </div>

      <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>
  </div>
  <!-- slider end -->
  <div style="background-image: url(./assets/images/cover.png);" class="w-full bg-cover bg-center h-[30vh] md:h-[70vh] relative">
    <!-- Black overlay -->
    <div class="absolute inset-0 bg-black opacity-50"></div>
    
    <div class="flex justify-center items-center text-white text-lg md:text-4xl font-bold h-full relative">
        <h1 class="text-center z-10 relative">Guided by creativity and driven by purpose, <br> Mediastar Limited crafts compelling narratives that <br> transcend boundaries and leave an indelible mark <br> on the media landscape.  </h1>
    </div>
</div>


      </main>
@endsection