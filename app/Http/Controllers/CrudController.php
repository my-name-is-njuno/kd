<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use File;
use Session;


use App\Service;
use Image;
use App\Partner;

class CrudController extends Controller
{
    public function serviceindex()
    {
    	$services = Service::paginate(5);
    	return view('backend.services.index', compact('services'));
    }


    public function partnerindex()
    {
    	$partners = Partner::paginate(5);
    	return view('backend.partners.index', compact('partners'));
    }


    public function serviceadd(Request $r)
    {

    	$this->validate($r, [
    		'name'=>'required|unique:services',
    		'description'=>'required',
    		'picture'=>'required|image|mimes:jpg,jpeg,gif,png'
    	]);

    	$ser = new Service();


        
    	
        $serviceimage = $r->file('picture');
        $ext = $r->file('picture')->getClientOriginalExtension();
        $servicename = str_slug($r->name). "_".time().".".$ext;
        $servicename_large = str_slug($r->name). "-large_".time().".".$ext;
        $serr = Image::make($serviceimage->getRealPath());
        $destination = public_path('/images/services/' . $servicename);
        $destination_large = public_path('/images/services/' . $servicename_large);
        $serr->resize(570,400)->save($destination); 
        $serr->resize(800,532)->save($destination_large); 



    	$ser->name = $r->name;
    	$ser->description = $r->description;
    	$ser->picture = $servicename;
        $ser->picture_big = $servicename_large;

    	$ser->save();

        Session::flash('success','Service added successfully');
    	return back();
    	
    }


    public function partneradd(Request $r)
    {
    	$this->validate($r, [
    		'name'=>'required|unique:partners',
    		'picture'=>'required|image|mimes:jpg,jpeg,gif,png'
    	]);

    	$pat = new Partner();



    	

    	$logoimage = $r->file('picture');
    	$ext = $r->file('picture')->getClientOriginalExtension();
    	$logoname = str_slug($r->name). "_".time().".".$ext;
    	$loggo = Image::make($logoimage->getRealPath());
        $destination = public_path('/images/logos/' . $logoname);
    	$loggo->resize(310,120)->save($destination); 



    	$pat->name = $r->name;
    	$pat->logo = $logoname;
        

    	$pat->save();

        Session::flash('success','Partner addeded successfully');
    	return back();

    }



    public function servicedelete($id)
    {
    	$ser = Service::findOrFail($id);
        $image_path = public_path('/images/services/'.$ser->picture);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $ser->delete();
        

        Session::flash('success','Service deleted successfully');

        return redirect()->route('manageservices');
    }


    public function partnerdelete($id)
    {
    	
        $pat = Partner::findOrFail($id);
        $image_path = public_path('/images/patners/'.$pat->logo);
        $image_path = public_path('/images/patners/'.$pat->logo);
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $pat->delete();
        

        Session::flash('success','Partner deleted successfully');

        return redirect()->route('managepartners');


    }








    public function serviceedit($id)
    {
        $serv = Service::findOrFail($id);
        return view('backend.services.edit', compact('serv'));
    }






    public function updateservice(Request $r, $id)
    {
        $ser = Service::findOrFail($id);

        $this->validate($r, [
            'name'=>'required',
            'description'=>'required',
        ]);


        $ser->name = $r->name;
        $ser->description = $r->description;

        if ($r->file('picture')) {
            $serviceimage = $r->file('picture');
            $ext = $r->file('picture')->getClientOriginalExtension();
            $servicename = str_slug($r->name). "_".time().".".$ext;
            $servicename_large = str_slug($r->name). "-large_".time().".".$ext;
            $serr = Image::make($serviceimage->getRealPath());
            $destination = public_path('/images/services/' . $servicename);
            $destination_large = public_path('/images/services/' . $servicename_large);
            $serr->resize(570,400)->save($destination); 
            $serr->resize(800,532)->save($destination_large); 

            $ser->picture = $servicename;
            $ser->picture_big = $servicename_large;
        }
        

        $ser->save();

        Session::flash('success','Service updated successfully');
        return redirect()->route('showservices', ['id'=>$ser->id]);
    }




    public function serviceshow($id)
    {
        $serv = Service::findOrFail($id);
        return view('backend.services.show', compact('serv'));
    }


}
