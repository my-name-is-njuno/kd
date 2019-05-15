<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Service;
use Image;
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

    	$this->validate($r, [
    		'name'=>'required',
    		'description'=>'required',
    		'picture'=>'required|image|mimes:jpg,jpeg,gif,png'
    	]);

    	$pat = new Partner();


        $logo_destination = public_path('images/');
        if (!file_exists($logo_destination)) {
            mkdir($logo_destination);
        }
    	
        $logo = $r->file('picture');
        $logo_name = time().str_slug($r->name).".".$logo->getClientOriginalExtension();
        $logo_modified = Image::make($logo->getRealPath());
        $logo_modified->resize(320,120)->save($logo_destination.$logo_name);



    	$pat->name = $r->name;
    	$pat->description = $r->description;
    	$pat->logo = $logo_name;

    	$pat->save();
    	return back();
    	
    }


    public function partneradd(Request $r)
    {
    	$this->validate($r, [
    		'name'=>'required',
    		'picture'=>'required|image|mimes:jpg,jpeg,gif,png'
    	]);

    	$pat = new Partner();



    	$destination = public_path('/images/logos/');

    	$logoimage = $r->file('picture');
    	$ext = $r->file('picture')->getClientOriginalExtension();
    	$logoname = str_slug($r->name). "_".time().$ext;
    	$loggo = Image::make($logoimage->getRealPath());
    	$loggo->resize(310,120)->save($destination, $logoname); 



    	$pat->name = $r->name;
    	$pat->description = $r->description;
    	$pat->logo = $logoname;

    	$pat->save();
    	return back();

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
