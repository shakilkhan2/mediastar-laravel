@extends('layouts.master')
@section('content')
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
          <div class="w-1/3 text-left font-bold  p-4"><a href="./job-details">Senior IT Engineer </a><br> <span class="font-normal md:font-semibold">Department: Information Technology</span></div>
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
@endsection
