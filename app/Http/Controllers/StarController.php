<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarController extends Controller
{
    function Home() {
        return view('frontend.index');
   }
   
    function Business() {
        return view('frontend.business');
   }

   function CSR() {
    return view('frontend.csr');
}

function Career() {
    return view('frontend.career');
}

function Contact() {
    return view('frontend.contact');
}

function About() {
    return view('frontend.about');
}

function Achievements() {
    return view('frontend.achievements');
}

function Management() {
    return view('frontend.management');
}

function JobDetails() {
    return view('frontend.job-details');
}
}
