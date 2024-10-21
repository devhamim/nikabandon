<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NikaFrontendController extends Controller
{
    //abouts
    function abouts(){
        return view('frontend.about');
    }
    //contacts
    function contacts(){
        return view('frontend.contact');
    }
    //pricings
    function pricings(){
        return view('frontend.pricing');
    }
    //our_blogs
    function our_blogs(){
        return view('frontend.blogs');
    }
    //our_gallerys
    function our_gallerys(){
        return view('frontend.gallerys');
    }
}
