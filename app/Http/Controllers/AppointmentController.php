<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {

        $apps = Appoitment::all();

        return view('appointments.index', compact('apps'));

    }

    public function create()
    {



    }


    public function store(Request $r)
    {

        if($r->ajax()) {

            $this->validate($r, [
                'name'=>'required',
                'mobile'=>'required',
                'location'=>'required',
                'message'=>'required',
                'email'=>'required'
            ]);


            $app = new Appointment();

            $app->name= $r->name;
            $app->phone= $r->mobile;
            $app->location= $r->location;
            $app->email= $r->email;
            $app->message= $r->message;

            $app->save();
            return response()->json(['success'=>'Appointment Booked Successfully, You will be contacted Soon. Thank You']);
        }
            

        
    }


   


    public function update(Request $r, $id)
    {

    }



    public function detele($id)
    {

    }



}
