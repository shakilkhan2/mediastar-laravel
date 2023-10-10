<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarController extends Controller
{
    function Home() {
        return view('welcome');
   }
   
    function Business() {
        return view('business');
   }

   function CSR() {
    return view('csr');
}

function Career() {
    return view('career');
}

function Contact() {
    return view('contact');
}
}
