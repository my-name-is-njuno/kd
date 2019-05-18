<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

use App\Service;

use App\Partner;

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
        $services = Service::all();
        return view('frontend.services', compact('services'));
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
        $partners = Partner::all();
        return view('frontend.partners', compact('partners'));
    }
}
