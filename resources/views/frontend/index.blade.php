@extends('layouts.master')
@section('content')
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
@endsection