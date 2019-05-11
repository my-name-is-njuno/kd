<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }


    public function about()
    {
        return view('frontend.about');
    }


    public function services()
    {
        return view('frontend.services');
    }


    public function contacts()
    {
        return view('frontend.contact');
    }


    public function testimonials()
    {
        return view('frontend.testimonial');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function partners()
    {
        return view('frontend.partners');
    }
}
