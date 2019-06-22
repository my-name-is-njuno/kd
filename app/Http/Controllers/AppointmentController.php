<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Appointment;

use Mail;

use App\Mail\Newappointment;
use Session;

class AppointmentController extends Controller
{
    public function index()
    {

        $apps = Appointment::latest()->paginate(5);

        return view('backend.home', compact('apps'));

    }

    public function show($id)
    {

        $appt = Appointment::findOrFail($id);
        $appt->view = 1;
        $appt->save();
        return view('backend.showappt', compact('appt'));

    }


    public function store(Request $r)
    {

        if($r->ajax()) {

            $this->validate($r, [
                'name'=>'required',
                'mobile'=>'required',
                'location'=>'required',
                'message'=>'required',
                'email'=>'required',
                'preffered_date'=>'required',
            ]);


            $app = new Appointment();

            $app->name= $r->name;
            $app->phone= $r->mobile;
            $app->location= $r->location;
            $app->email= $r->email;
            $app->message= $r->message;
            $app->preffered_date= $r->preffered_date;

            $app->save();

            // Mail::send(new Newappointment($app));

            return response()->json(['success'=>'Appointment Booked Successfully, You will be contacted Soon. Thank You']);
        }
            

        
    }


   


    public function update(Request $r, $id)
    {

    }



    public function delete($id)
    {
        $appt = Appointment::findOrFail($id);
        if ($appt->delete()) {
            Session::flash('success','Appointment deleted');
            return redirect()->route('home');
        }
    }



}
