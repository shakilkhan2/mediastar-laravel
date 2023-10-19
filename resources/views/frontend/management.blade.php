@extends('layouts.master')
@section('content')
<main>
      <!-- Banner -->
      <div
        style="background-image: url(./assets/images/cover.png)"
        class="w-full bg-cover bg-center h-[30vh] md:h-[70vh]"
      >
        <div
          class="flex justify-center items-center text-white text-3xl md:text-4xl font-bold h-full"
        >
          <h1>MANAGEMENT</h1>
        </div>
      </div>
      <!-- Editor -->
      <div
        class="flex flex-col md:flex-row items-center justify-between  bg-[#DCDCDC] mt-10 "
      >
        <div class="px-10"><img class="" src="./assets/images/editor.png" alt="" /></div>

        <div class="w-full md:w-[700px] p-10">
          <div class="text-justify ">
            <h3
              class="text-2xl md:text-3xl font-bold md:font-extrabold mt-6 mb-8"
            >
              Matiur Rahman <br /><span class="text-lg font-semibold">Editor, Prothom Alo</span>
            </h3>
            <p class="text-justify">
              Matiur Rahman is an esteemed journalist and the editor of Prothom
              Alo, the largest circulated daily newspaper in Bangladesh. With an
              unwavering commitment to journalistic integrity, Rahman has played
              a pivotal role in shaping public opinion and promoting freedom of
              expression. Under his leadership, Prothom Alo has emerged as a
              trusted source of news, known for its comprehensive coverage and
              unbiased reporting. Rahman's dedication to highlighting critical
              issues and exposing corruption has earned him widespread
              recognition and respect. His leadership and vision have made a
              profound impact on the media landscape, cementing his status as a
              prominent figure in Bangladeshi journalism.
            </p>
          </div>
        </div>
      </div>
      <!-- members -->
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4 my-24 mx-10">
        <a href="./member-details.html">
          <div class="flex flex-col items-center">
            <img class="w-40 md:w-52" src="./assets/icons/demo.png" alt="" />
            <p class="text-2xl font-bold">Full Name</p>
            <p><span class="text-base font-bold"> Designation</span></p>
          </div>
        </a>
        <div class="flex flex-col items-center">
          <img class="w-40 md:w-52" src="./assets/icons/demo.png" alt="" />
          <p class="text-2xl font-bold">Full Name</p>
          <p><span class="text-base font-bold"> Designation</span></p>
        </div>
        <div class="flex flex-col items-center">
          <img class="w-40 md:w-52" src="./assets/icons/demo.png" alt="" />
          <p class="text-2xl font-bold">Full Name</p>
          <p><span class="text-base font-bold"> Designation</span></p>
        </div>
        <div class="flex flex-col items-center">
          <img class="w-40 md:w-52" src="./assets/icons/demo.png" alt="" />
          <p class="text-2xl font-bold">Full Name</p>
          <p><span class="text-base font-bold"> Designation</span></p>
        </div>
        <div class="flex flex-col items-center">
          <img class="w-40 md:w-52" src="./assets/icons/demo.png" alt="" />
          <p class="text-2xl font-bold">Full Name</p>
          <p><span class="text-base font-bold"> Designation</span></p>
        </div>
        <div class="flex flex-col items-center">
          <img class="w-40 md:w-52" src="./assets/icons/demo.png" alt="" />
          <p class="text-2xl font-bold">Full Name</p>
          <p><span class="text-base font-bold"> Designation</span></p>
        </div>
        <div class="flex flex-col items-center">
          <img class="w-40 md:w-52" src="./assets/icons/demo.png" alt="" />
          <p class="text-2xl font-bold">Full Name</p>
          <p><span class="text-base font-bold"> Designation</span></p>
        </div>
        <div class="flex flex-col items-center">
          <img class="w-40 md:w-52" src="./assets/icons/demo.png" alt="" />
          <p class="text-2xl font-bold">Full Name</p>
          <p><span class="text-base font-bold"> Designation</span></p>
        </div>
        <div class="flex flex-col items-center">
          <img class="w-40 md:w-52" src="./assets/icons/demo.png" alt="" />
          <p class="text-2xl font-bold">Full Name</p>
          <p><span class="text-base font-bold"> Designation</span></p>
        </div>
      </div>
    </main>
@endsection