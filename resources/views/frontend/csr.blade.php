@extends('layouts.master')
@section('content')
<main>
<!-- Banner -->
<div style="background-image: url(./assets/images/cover.png); " class="w-full bg-cover bg-center h-[30vh] md:h-[70vh]"  >
    <div class="flex justify-center items-center text-white text-3xl md:text-4xl font-bold h-full">
        <h1 class="text-center">CORPORATE SOCIAL <br>
            RESPONSIBILITIES</h1>
    </div>
    </div>
    <!-- Prothom Alo Trust -->
    <div class="flex flex-col-reverse md:flex-row-reverse justify-center gap-20 my-10 items-center mx-10">
        <div>
<img class="w-96 rounded-lg" src="./assets/images/trust-logo.png" alt="">
        </div>
        <div class="w-full md:w-[500px] mt-10 md:mt-0">
          <div class="flex place-items-start">
            <div>
              <a href="#" class="arrow-link">
                <img class="mt-2" src="./assets/icons/arrow3.svg" alt="">
              </a>
            </div>
            <div>
              <h1 class="text-3xl font-bold ml-10 text-[#FB2121]">Prothom Alo Trust</h1>
            </div>
          </div>
          <div class=" text-justify">
            <p class="mt-8 font-semibold">
                Bangladesh is known as a land of calamities. But the people of this nation are also known for their solidarity, cooperation and empathy. There is a desire among the people to extend their hands in assistance to others whenever disasters strikes at a national or even, a personal level. Prothom Alo works in the media, diligently providing information to the people. To provide a voice to the same people who want to help others in distress, the Prothom Alo Trust was established.
            </p>
          </div>
          
        </div>
      </div>
       <!-- Activities -->
    <div class="flex flex-col md:flex-row justify-center gap-20 my-10 items-center mx-10">
        <div>
<img class="w-96 rounded-lg" src="./assets/images/activities.png" alt="">
        </div>
        <div class="w-full   md:w-[500px] mt-10 md:mt-0">
          <div class="flex place-items-start">
            <div>
              <a href="#" class="arrow-link">
                <img class="mt-2" src="./assets/icons/arrow3.svg" alt="">
              </a>
            </div>
            <div>
              <h1 class="text-3xl font-bold ml-10 text-[#FB2121]">Activities</h1>
            </div>
          </div>
          <div class=" text-justify">
            <ul style="list-style-type: disc;" class="mt-8 font-semibold mx-10">
<li>Fund to rehabilitate women with acid burns</li>
<li>Movement against Drug Abuse</li>
<li>Oditiya Scholarship</li>
<li>Fund for Relief during calamities</li>
<li>Fund for Indomitable students</li>
<li>Support Fund for Rana Plaza Victims</li>
<li>Sadaat Smriti Palli ( Social Welfare Project) </li>
<li>Fund for Aiding persecuted journalists</li>
            </ul>
          </div>
          
        </div>
      </div>
      <!-- Social Organizations -->
      <div class="m-24">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-10 items-center">
            <a href="#"><img src="./assets/images/medhabi.png" alt=""></a>
            <a href="#"><img src="./assets/images/additiya.png" alt=""></a>
            <a href="#"><img src="./assets/images/no-smoke.png" alt=""></a>
            <a href="#"><img src="./assets/images/meril.png" alt=""></a>
            <a href="#"><img src="./assets/images/donate.png" alt=""></a>
          </div>
          <a href="#" class="">
    
            <button class="flex justify-between items-center bg-[#0572E6] px-4 py-3 mt-10">
              <p class="text-[#fff]">About Us</p>
              <a class="arrow-link" href=""><img class="w-16 ms-4 " src="./assets/icons/arrow.png" alt="link arrow"></a>
            </button>
          </a>
      </div>
    </main>
@endsection