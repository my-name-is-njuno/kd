<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Service;
use App\Partner;

class CrudController extends Controller
{
    public function serviceindex()
    {
    	$services = Service::all();
    	return view('backend.services.index', compact('services'));
    }


    public function partnerindex()
    {
    	$partners = Partner::all();
    	return view('backend.partners.index', compact('partners'));
    }


    public function serviceadd(Request $r)
    {
    	# code...
    }


    public function partneradd(Request $r)
    {
    	# code...
    }



    public function servicedelete($id)
    {
    	# code...
    }


    public function partnerdelete($id)
    {
    	# code...
    }
}
