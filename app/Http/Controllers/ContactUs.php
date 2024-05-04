<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUs extends Controller
{
    public function showContact(){
        return view('contactus.contact_us');
    }

    public function showAbout(){
        return view('aboutus.about_us');
    }
}
