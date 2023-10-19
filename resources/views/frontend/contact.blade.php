@extends('layouts.master')
@section('content')
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
@endsection